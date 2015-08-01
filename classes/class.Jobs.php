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
class Jobs {
//put your code here
    public $id = null;
//    public $topic = null;
    public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "jobs";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->id)){
            $db = new Db();
                      $id= $db->quote($this->id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE  id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function save(){
        if(is_numeric($this->id)){
            $db = new Db();
            $id = $db->quote($this->id);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (id, active)VALUES($id , $active) 
                ON DUPLICATE KEY UPDATE    
                active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
