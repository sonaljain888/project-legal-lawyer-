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
class DocumentCategory {
    public $id = null;
    public $doc_type_id = null;
      public $name = null;
    public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "document_category";
    }
    
    public function getAll(){
        $db = new Db();
        $query ="SELECT dc.*,dt.name as DocumentType_name from ".$this->tableName()." as dc left join document_type dt on dt.id =dc.doc_type_id ";
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
    
    public function getForms(){
        $db = new Db();
        $query ="SELECT * from ".$this->tableName()." where doc_type_id ='1' ";
        return $db->select($query);
    }
    public function getAgreements(){
        $db = new Db();
        $query ="SELECT * from ".$this->tableName()." where doc_type_id ='2' ";
        return $db->select($query);
    }
    public function getJudgements(){
        $db = new Db();
        $query ="SELECT * from ".$this->tableName()." where doc_type_id ='3' ";
        return $db->select($query);
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
