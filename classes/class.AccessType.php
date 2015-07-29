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
class AccessType {
//put your code here
    public $access_id = null;
    public $access_name = null;
    public $access_status = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    private function tableName(){
        return "access_type";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->access_id)){
            $db = new Db();
            $id = $db->quote($this->access_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    
    public function getPageTypeUrl(){
        $db = new Db();
        $page_type_id = $db->quote($this->access_id);
        $query = "SELECT url FROM ".$this->tableName()."  where id =  $page_type_id AND active = 1";
        $row = $db->select($query);
        if(count($row)){
            return $row[0]['url'];
        }
        return "";
    }
    
    public function save(){
        
    }
}
