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
class State extends Country {
//put your code here
    public $state_id = null;
    public $state_name = null;
    public $state_status = null;
    
    public function tableName(){
        return "states";
    }
    
     public function getName(){
        if(is_numeric($this->state_id)){
            $db = new Db();
            $id = $db->quote($this->state_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function getAll() {
            $db = new Db();
            $query = "SELECT t1.id, t2.name as country_name, t1.name, t1.active FROM ".$this->tableName()." t1 LEFT JOIN ".parent::tableName()." t2 on t2.id = t1.country_id  ";
            return $db->select($query);
    }
    
    public function save(){
        if(is_numeric($this->state_id) && is_string($this->state_name)){
            $db = new Db();
            $id = $db->quote($this->state_id);
            $country_id=$db->quote($this->country_id);
            $name = $db->quote($this->state_name);
            $active = $db->quote($this->state_status);
            $query = "INSERT INTO ".$this->tableName()." (id, country_id, name, active) VALUES($id,$country_id, $name , $active) 
                ON DUPLICATE KEY UPDATE    
                name= $name,country_id=$country_id, active=$active";
            if($db->query($query)){
                    return true;
            }else{
                Error::set($db->error());
            }
        }
        return false;
        
    }
}
