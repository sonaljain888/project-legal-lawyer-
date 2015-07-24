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
class Document {
    public $id = null;
    public $user_id = null;
    public $type_id = null;
    public $heading = null;
    public $desc = null;
    public $category_id = null;
    public $cost = null;
    public $date = null;
      public $cost_no = null;
    public $judges = null;
     public $act = null;
      public $file = null;
       public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "document";
    }
    
    public function getAll(){
       $db = new Db();
        $query ="SELECT d.*,dt.name as DocumentType_name,dc.name as Category_Name from ".$this->tableName()." as d left join document_type dt on dt.id =d.type_id 
            left join document_category as dc on dc.id=d.category_id";
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
            $doc_type_id = $db->quote($this->doc_type_id);
            $name = $db->quote($this->name);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (id,doc_type_id,name,active) VALUES($id,$doc_type_id,$name , $active) 
                ON DUPLICATE KEY UPDATE    
                name= $name, active=$active,doc_type_id=$doc_type_id";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
