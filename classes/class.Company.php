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
class Property {
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

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
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
    
    public function save(){
        if(is_numeric($this->id) && is_string($this->name)){
            $db = new Db();
            $id = $db->quote($this->id);
            $user_id = $db->quote($this->user_id);
            $name = $db->quote($this->name);
            $city = $db->quote($this->city);
            $location =$db->quote($this->location);
            $website = $db->quote($this->website);
            $email = $db->quote($this->email);
            $phone = $db->quote($this->phone);
            $specialization = $db->quote($this->specialization);
            $description = $db->quote($this->description);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (user_id,name,city,location,website,email,phone,specialization,description,active) 
                VALUES($user_id,$name,$city,$location,$website,$email,$phone,$specialization,$description, $active) 
                ON DUPLICATE KEY UPDATE    
              user_id=$user_id,name=$name,city=$city,location=$location,website=$website,email=$email,phone=$phone,specialization=$specialization,
                  description=$description,active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
?>