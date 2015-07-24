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
class Page {
    public $page_id = null;
    public $page_name = null;
    public $category_id = null;
    public $url = null;
    public $top_description = null;
    public $bottom_description = null;
    public $keyword = null;
    public $title = null;
    public $description = null;
    public $access_type = null;
    public $page_status = null;
    
    public  function getPageDetails(){
        $db = new Db();
        $where = "";
        if(isset($this->data['url'])){
            $where.= " AND url = ".$db->quote($this->data['url']) ;
        }
        if(isset($this->data['category_id'])){
            $where.= " AND category_id = ".$db->quote($this->data['category_id']) ;
        }
        $query = "SELECT * FROM ".$this->tableName(). " WHERE active = 1  ".$where;
        return $db->select($query);
    }
    
    public function tableName(){
        return "pages";
    }
    
    public function set($key, $val){
        $this->$key = $val;
    }
    
    public function get($key){
        return $this->$key;
    }
    
    public function getPageCategoryId($cat_name){
        $db = new Db();
        $cat_name = $db->quote($cat_name);
        $query = "SELECT id FROM ".$this->tableName()." WHERE url = $cat_name and active = 1";
        return $db->select($query);
    }
    
     public function getPageTypeUrl($page_type_id){
        $db = new Db();
        $page_type_id = $db->quote($page_type_id);
        $query = "SELECT url FROM ".$this->tableName()."  where id =  $page_type_id AND active = 1";
        $row = $db->select($query);
        if(count($row)){
            return $row[0]['url'];
        }
        return "";
    }
    
    public function save(){
          if(is_numeric($this->page_id) && is_string($this->page_name)){
            $db = new Db();
            $id = $db->quote($this->page_id);
            $category_id = $db->quote($this->category_id);
            $name = $db->quote($this->page_name);
            $url= $db->quote($this->url);
            $top_description= $db->quote($this->top_description);
            $bottem_description = $db->quote($this->bottom_description);
            $keyword= $db->quote($this->keyword);
            $title= $db->quote($this->title);
            $description = $db->quote($this->description);
            $access_type = $db->quote($this->access_type);
            $active = $db->quote($this->page_status);
            
            $author = $db->quote(1);
            $modified = $db->quote(1);
            
            $query = "INSERT INTO ".$this->tableName()." (page_id, category_id, name, url, top_description, bottem_description, 
                Keyword, title, description, author, modified_by, access_type,  active) 
                VALUES($id, $category_id,  $name, $url, $top_description, $bottem_description, $keyword, $title, $description,
                    $author, $modified, $access_type, $active)
                ON DUPLICATE KEY UPDATE    
                name= $name, category_id=$category_id, url=$url,top_description=$top_description, bottem_description=$bottem_description, 
                Keyword=$keyword, title=$title, description=$description, author=$author, modified_by=$modified, 
                   active=$active, access_type=$access_type"; 
             if($db->query($query)){
                    return true;
            }else{
                Error::set($db->error());
            }
        }
        return false;
    }
    
    public function getAll() {
            $db = new Db();
            $query = "SELECT p . * , pc.name as category_name, at.type
             FROM ".$this->tableName()." p
             LEFT JOIN page_category pc ON pc.id = p.category_id 
             LEFT JOIN access_type at on at.id = p.access_type";
            return $db->select($query);
    }
    
    public function getName() {
        if (is_numeric($this->page_id)) {
            $db = new Db();
            $id = $db->quote($this->page_id);
            $query = "SELECT * FROM " . $this->tableName() . " WHERE page_id = " . $id;
            return $db->select($query);
        }
        return false;
    }
}