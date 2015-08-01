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
    public $city_name = null;
    public $locality = null;
    public $builder_name = null;
    public $project_name = null;
    public $clear_title = null;
    public $legal_risk = null;
    public $legal_description = null;
    public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "property_verification";
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
            $city_name = $db->quote($this->city_name);
            $locality =$db->quote($this->locality);
            $builder = $db->quote($this->builder_name);
            $project = $db->quote($this->project_name);
            $clear = $db->quote($this->clear_title);
            $legal_risk = $db->quote($this->legal_risk);
            $legal_description = $db->quote($this->legal_description);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (user_id,city_name,locality,builder_name,project_name,clear_title,legal_risk,legal_description,active) 
                VALUES($user_id,$city_name,$locality,$builder,$project,$clear,$legal_risk,$legal_description, $active)";
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