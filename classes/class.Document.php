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
      public $case_no = null;
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
    
    public function getAllFile($category_id){
        if(is_numeric($this->id)){
            $db = new Db();
            $id = $db->quote($this->id);
            $category_id=$db->quote($this->category_id);
            $query = "SELECT *, FROM ".$this->tableName()." where category_id=$category_id and id=$id ";
            return $db->select($query);
        }
        return false;        
    }
    
    public function save(){
        if(is_numeric($this->id) && is_string($this->name)){
            $db = new Db();
            $id = $db->quote($this->id);
            $user_id = $db->quote($this->user_id);
            $doc_type_id = $db->quote($this->doc_type_id);
            $heading =$db->quote($this->heading);
            $description = $db->quote($this->desc);
            $category_id = $db->quote($this->category_id);
            $cost = $db->quote($this->cost);
            $case = $db->quote($this->case_no);
            $judge = $db->quote($this->judges);
            $act = $db->quote($this->act);
            $file = $db->quote($this->file);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (user_id,type_id,heading,desc,category_id,cost,case_no,judges,act,file,active) 
                VALUES($doc_type_id,$heading,$description,$category_id,$cost,$case,$judge,$act,$file, $active) 
                ON DUPLICATE KEY UPDATE    
               user_id=$user_id,type_id=$doc_type_id,heading=$heading,desc=$description,category_id=$category_id,cost=$cost,
                   case_no=$cost,judges=$judge,act=$act,file=$file,active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
