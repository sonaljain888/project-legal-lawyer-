<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author anjain
 */
class Error {

    public static function set($error = "") {
        if (!Session::read("error")) {
            $err = array();
            $err[] = $error;
            Session::write("error", $err);
        } else {
            $err = Session::read("error");
            $err[] = $error;
            Session::write("error", $err);
        }
    }

    public static function get($key) {
        return Session::read($key);
    }

    public static function displayError() {
        if (!Session::read("error")) {
            return FALSE;
        }
        $output = "";
        $err = Session::read("error");
        Session::delete("error");
        $output = NULL;
        if(count($err)){
            foreach ($err as $val) {

                $output.="<div>" . $val . "</div>";
            }
        }
        return $output;
    }

    public static function notFoundPage(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        $pageDetails = array();
        $pageDetails[0]['title'] = $pageDetails[0]['Keyword'] = $pageDetails[0]['author'] = $pageDetails[0]['description'] = "Page Not Found - 404";
        $templateFile = USER_TEMPLATE_FOLDER . '/error.php';
        include ($templateFile);
        exit;
    }
}
