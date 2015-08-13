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
class LegalService {
//put your code here
    public $id = null;
    public $legal_service = null;
     public $description = null;
       public $cost= null;
            public $time= null;
    public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "legal_service";
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
        if(is_numeric($this->id) && is_string($this->legal_service)){
            $db = new Db();
            $id = $db->quote($this->id);
            $legal_service = $db->quote($this->legal_service);
              $description = $db->quote($this->description);
                $cost = $db->quote($this->cost);
                  $time = $db->quote($this->time);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (id,legal_service,description,cost,time, active) VALUES($id,$legal_service,$description,$cost,$time , $active) 
                ON DUPLICATE KEY UPDATE    
               legal_service= $legal_service,description=$description,cost=$cost,time=$time active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
