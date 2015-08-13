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
class Company extends Lpo {
    public $id = null;
    public $user_id = null;
    public $name = null;
    public $city = null;
    public $location = null;
    public $website = null;
    public $email = null;
    public $phone = null;
    public $specialization = null;
    public $description = null;
    public $active = null;

    
     public function set($key , $val){
        $this->$key = $val;
    }
    
    public function get($key){
        return $this->$key;
    }
     
    public function tableName(){
        return "company";
    }
    
    public function getAll(){
       $db = new Db();
        $query ="SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->id)){
            $db = new Db();
            $id = $db->quote($this->id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function company(){
        return $this->getAll();
    }

        public function addcompany(){
        $errors = Error::get("error");
        if (!count($errors) || $errors == "") {
             $db = new Db();
        
            if (Session::read("userid")) {
                $user_id = Session::read("userid");
                //print_r($user_id);                exit();
           
           // $user_id=$db->quote($this->user_id);
            $name = $db->quote($this->name);
            $email = $db->quote($this->email);
            $website = $db->quote($this->website);
            $phone = $db->quote($this->phone);
            $city = $db->quote($this->city);
            $location = $db->quote($this->location);
            $specialization = $db->quote($this->specialization);
            $description=$db->quote($this->description);
            $query = "INSERT INTO ".$this->tableName()." (user_id,name,city,location,website,email,phone,specialization,description,active) 
                VALUES($user_id,$name,$city,$location,$website,$email,$phone,$specialization,$description,1)";    
            if($db->query($query)){
                //print_r($query);                exit();
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        
        }
        return false;
    }
}
?>


