<?php

class General {

    private $url = null;

    public static function getPageURL($fullUrl = FALSE) {
        $pageURL = 'http';
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        if ($fullUrl) {
            return $pageURL;
        }
        return trim($_SERVER["REQUEST_URI"]);
    }

    public function setTempalte() {
        $notFoundPage = false;
        $id = 0;
        $urlArray = $this->splitPageUrl();
        $page = new Page();
        ob_start();
        if (count($urlArray) == 0 || $urlArray[0] == "home") {
            $page->set("url", "home");
            $templateFile = USER_TEMPLATE_FOLDER . '/index.php';
        } elseif (count($urlArray) == 1 && $urlArray[0] == "admin") {
            $templateFile = ADMIN_TEMPLATE_FOLDER . '/index.php';
        } elseif (count($urlArray) == 1 && $urlArray[0] != "admin") {
            $page->set("url", $urlArray[0]);
            $templateFile = USER_TEMPLATE_FOLDER . '/page.php';
        } elseif ((count($urlArray) > 1 && count($urlArray) < 6) && $urlArray[0] != "admin") {
            $page->set("url", $urlArray[1]);
            $categoryDetails = $page->getPageCategoryId($urlArray[0]);
            if (count($categoryDetails)) {
                $page->set("category_id", $categoryDetails[0]['id']);
            }
            $templateFile = USER_TEMPLATE_FOLDER . '/page.php';
        } else {
            $notFoundPage = true;
        }
        $pageDetails = $page->getPageDetails();
        //print_r($pageDetails); exit;
        if (is_array($pageDetails) && count($pageDetails) && count($pageDetails[0])) {
            if ($pageDetails[0]["access_type"] == 1 && count($urlArray)) {
                switch ($urlArray[0]) {
                    case "login" :
                        if (Session::isLogged()) {
                            $pageType = $page->getPageTypeUrl(Session::read("access_type"));
                            $url = SERVER_URL . "/$pageType/home";
                            General::redirectUrl($url);
                        }
                        break;
                }
            } elseif (isset($urlArray[1]) && !is_numeric($urlArray[1]) && count($urlArray)==2 && $urlArray[1] == "logout" ) {  //Logout 
            } elseif (isset($urlArray[2]) && is_numeric($urlArray[2]) && $urlArray[2] > 0) {  //User and Lawyer public profile using id
            } elseif (!Session::isLogged() && $pageDetails[0]["access_type"] > 1 && !is_numeric($urlArray[2])) {
                Error::set(INVALID_LOGIN);
                $url = SERVER_URL . "/login";
                General::redirectUrl($url);
            } elseif (($pageDetails[0]["access_type"] != Session::read("access_type") && Session::isLogged() && !is_numeric($urlArray[2]))) {
                $pageType = $page->getPageTypeUrl(Session::read("access_type"));
                $url = SERVER_URL . "/$pageType/home";
                General::redirectUrl($url);
            }
            if (!$notFoundPage) {
                if (count($urlArray) > 1) {
                    $pageCnt = self::useClass($urlArray);
                    //print_r($pageCnt); exit;
                    if (!$pageCnt) {
                        $notFoundPage = true;
                    }
                }
                if (!$notFoundPage) {
                    include ($templateFile);
                }
            }
        } else {
            $notFoundPage = true;
        }


        if ($notFoundPage) {
            Error::notFoundPage();
        }

        $contents = ob_get_contents();
        ob_clean();
        return $contents;
    }

    public function splitPageUrl() {
        return array_values(array_filter(explode("/", $this->url)));
    }

    public static function getPageTemplate($url) {
        $request = Request::getAllRequest();
        if (count($request)) {
            switch ($request['type']) {
                case 'user':
                    $user = new User();
                    $user->set("request", $request);
                    $result = $user->$request['action']();
                    $page = new Page();
                    if ($result && $request['action'] == 'login') {
                        $pageType = $page->getPageTypeUrl(Session::read("access_type"));
                        $r_url = SERVER_URL . "/$pageType/home";
                    } elseif ($result && $request['action'] == 'registration') {
                        $pageType = $page->getPageTypeUrl(Session::read("access_type"));
                        $r_url = SERVER_URL . "/$pageType/home";
                    } else {
                        $r_url = SERVER_URL . "/login";
                    }
                    General::redirectUrl($r_url);
                    break;
            }
        }
        $general = new General();
        $general->url = $url;
        return $general->setTempalte();
    }

    public static function redirectUrl($url) {
        header("Location: " . $url);
        exit();
    }

    public static function useClass($urlArray = array()) {
        $className = strtolower($urlArray[0]);
        $id = 0;
        if (isset($urlArray[2])) {
            $id = $urlArray[2];
        }
        switch ($className) {
            case "user":
            case "lawyer":
                $obj = new User();
                if (isset($urlArray[1])) {
                    $content = $obj->$urlArray[1]($id);
                }
                break;
            case "blog":
                break;
            default :
                $content = array();
                break;
        }
        
        if (count($content) == 1) {
            $content = $content[0];
        } elseif (count($content) > 1) {
            
        } else {
            return false;
        }
        return $content;
    }
}