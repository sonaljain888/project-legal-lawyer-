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
        } elseif ((count($urlArray) > 1 && count($urlArray) < 6) && $urlArray[0] == "lpo-training") {
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
        // print_r($page);        exit();
        $pageDetails = $page->getPageDetails();
        // print_r($pageDetails); exit;
        if (is_array($pageDetails) && count($pageDetails) && count($pageDetails[0])) {
            if ($pageDetails[0]["access_type"] == 1 && count($urlArray)) {
                switch ($urlArray[0]) {
                    case "login" :
                        if (Session::isLogged()) {
                            $page->set("access_id", Session::read("access_type"));
                            $pageType = $page->getPageTypeUrl();
                            $url = SERVER_URL . "/$pageType/home";
                            General::redirectUrl($url);
                        }
                        break;
                    default :
                        break;
                }
            } elseif (isset($urlArray[1]) && !is_numeric($urlArray[1]) && count($urlArray) == 2 && $urlArray[1] == "logout") {  //Logout 
            } elseif (isset($urlArray[2]) && is_numeric($urlArray[2]) && $urlArray[2] > 0) {  //User and Lawyer public profile using id
            } elseif (!Session::isLogged() && $pageDetails[0]["access_type"] > 1 && !is_numeric($urlArray[2])) {
                Error::set(INVALID_LOGIN);
                $url = SERVER_URL . "/login";
                General::redirectUrl($url);
            } elseif (($pageDetails[0]["access_type"] != Session::read("access_type") && Session::isLogged() && !is_numeric($urlArray[2]))) {
                $page->set("access_id", Session::read("access_type"));
                $pageType = $page->getPageTypeUrl();
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
        if (count(Request::getAllRequest())) {
            switch (Request::post("type")) {
                case 'user':
                    $user = new User();
                    $user->set("email_id", Request::post("email"));
                    $user->set("password", Request::post("password"));
                    $user->set("re_pass", Request::post("r_password"));
                    $user->set("name", Request::post("name"));
                    $user->set("mobile", Request::post("mobile"));
                    $user->set("website", Request::post("website"));
                    $user->set("add", Request::post("add"));
                    $user->set("city", Request::post("city"));
                    $user->set("location", Request::post("location"));
                    $user->set("experience", Request::post("experience"));
                    $user->set("education", Request::post("education"));
                    $user->set("specialization", Request::post("specialization"));
                    $user->set("pra_court", Request::post("pra_court"));
                    $action = Request::post("action");
                    $result = $user->$action();
                    $page = new Page();
                    if ($result && $action == 'login') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/home";
                    } elseif ($result && $action == 'registration') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/home";
                    } elseif ($result && $action == 'editProfile') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/profile";
                    } else {
                        $r_url = SERVER_URL . "/login";
                    }
                    General::redirectUrl($r_url);
                    break;
                case 'company':
                    $company = new Company();
                    $company->set("user_id", Request::post("userid"));
                    $company->set("name", Request::post("name"));
                    $company->set("city", Request::post("city"));
                    $company->set("location", Request::post("location"));
                    $company->set("website", Request::post("website"));
                    $company->set("email", Request::post("email"));
                    $company->set("phone", Request::post("phone"));
                    $company->set("specialization", Request::post("specialization"));
                    $company->set("description", Request::post("description"));
                    $action = Request::post("action");
                    $result = $company->$action();
//                        print_r($result);                        exit();
                    $page = new Page();
                    if ($result && $action == 'addcompany') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/company";
                    } else {
                        $r_url = SERVER_URL . "/lpo-training";
                    }
                    General::redirectUrl($r_url);
                    break;
                case 'question':
                    $ques = new Questions();
                    $ques->set("user_id", Request::post("userid"));
                    $ques->set("question", Request::post("question"));
                    $ques->set("heading", Request::post("heading"));
                    $ques->set("topic_id", Request::post("topic_id"));
                    $ques->set("city", Request::post("city"));
                    $action = Request::post("action");
                    $result = $ques->$action();
//                       print_r($result);                        exit();
                    $page = new Page();
                    if ($result && $action == 'addquestion') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/online-legal-advice";
                    } else {
                        $r_url = SERVER_URL . "/home";
                    }
                    General::redirectUrl($r_url);
                    break;
                case 'jobs':
                    $job = new Jobs();
                    $job->set("user_id", Request::post("userid"));
                    $job->set("heading", Request::post("heading"));
                    $job->set("education", Request::post("education"));
                    $job->set("exp_min", Request::post("exp_min"));
                    $job->set("exp_max", Request::post("exp_max"));
                    $job->set("salary", Request::post("salary"));
                    $job->set("description", Request::post("description"));
                    $job->set("c_name", Request::post("companyname"));
                    $job->set("email", Request::post("email"));
                    $job->set("phone", Request::post("phone"));
                    $job->set("city", Request::post("city"));
                    $job->set("address", Request::post("address"));
                    $result = $company->$action();
//                        print_r($result);                        exit();
                    $page = new Page();
                    if ($result && $action == 'addjobs') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/jobs";
                    } else {
                        $r_url = SERVER_URL . "/$pageType/home";
                    }
                    General::redirectUrl($r_url);
                    break;
                case 'resumes':
                    $job = new Jobs();
                    $job->set("user_id", Request::post("userid"));
                    $job->set("heading", Request::post("heading"));
                    $job->set("education", Request::post("education"));
                    $job->set("exp_min", Request::post("exp_min"));
                    $job->set("exp_max", Request::post("exp_max"));
                    $job->set("salary", Request::post("salary"));
                    $job->set("description", Request::post("description"));
                    $job->set("c_name", Request::post("companyname"));
                    $job->set("email", Request::post("email"));
                    $job->set("phone", Request::post("phone"));
                    $job->set("city", Request::post("city"));
                    $job->set("address", Request::post("address"));
                    $result = $company->$action();
//                         print_r($result);                        exit();
                    $page = new Page();
                    if ($result && $action == 'addjobs') {
                        $page->set("access_id", Session::read("access_type"));
                        $pageType = $page->getPageTypeUrl();
                        $r_url = SERVER_URL . "/$pageType/jobs";
                    } else {
                        $r_url = SERVER_URL . "/$pageType/home";
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
            case "lpo-training":
                if (isset($urlArray[1])) {
                    $obj = new $urlArray[1]();
                    $content = $obj->$urlArray[1]();
                }
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