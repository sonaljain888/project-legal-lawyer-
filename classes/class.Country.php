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
class Country {
//put your code here
    public $country_id = null;
    public $country_name = null;
    public $country_status = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "country";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->country_id)){
            $db = new Db();
            $id = $db->quote($this->country_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function save(){
        if(is_numeric($this->country_id) && is_string($this->country_name)){
            $db = new Db();
            $id = $db->quote($this->country_id);
            $name = $db->quote($this->country_name);
            $active = $db->quote($this->country_status);
            $query = "INSERT INTO ".$this->tableName()." (id, name, active) VALUES($id,$name , $active) 
                ON DUPLICATE KEY UPDATE    
                name= $name, active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
