<?php

class Request {

    public static function getAllRequest() {
        return $_REQUEST;
    }

    public static function get($key) {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        return "";
    }
    
    public static function post($key) {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        return "";
    }
}

?>
