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
class Validation {

    public static function Email($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return true;
        } else {
            return false;
        }
    }

   /*
    Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$
    $ = beginning of string
    \S* = any set of characters
    (?=\S{8,}) = of at least length 8
    (?=\S*[a-z]) = containing at least one lowercase letter
    (?=\S*[A-Z]) = and at least one uppercase letter
    (?=\S*[\d]) = and at least one number
    (?=\S*[\W]) = and at least a special character (non-word characters)
    $ = end of the string

 */  
    
    public static function valid_password($pass) {
    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$pass))
        return FALSE;
    return TRUE;
    }
    
    public static function getAccessType($id){
        if($id){
            $db = new Db();
            $id = $db->quote($id);
            $query = "SELECT * FROM access_type WHERE id = $id AND active = 1";
            $row = $db->select($query);
            if(strlen($row[0]['type'])){
                return $row[0]['type'];
            }
        }
        return "Public";
    }
    
    public static function getStautsName($val){
        if($val){
            return "Active";
        }
        return "In Active";
    }
    
    public static function getStautsTinyVal($name){
        if($name == "on"){
            return 1;
        }
        return 0;
    }
       
}








