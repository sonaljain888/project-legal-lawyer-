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
class Menu {

    public static function getMenus($access_type, $category_name) {
        return self::_init($access_type, $category_name);
    }

    private static function _init($access_type, $category_name) {
        $access_id = $category_id = 0;
        if (!strlen($access_type)) {
            Error::set(MISSING_ACCESS_TYPE);
            return false;
        } else {
            $access_id = self::getAccessTypeId($access_type);
            if (!$access_id) {
                Error::set(NOT_MATCHING_ACCESS_TYPE);
                return false;
            }
        }
        if (!strlen($category_name)) {
            Error::set(MISSING_CATEGORY_NAME);
            return false;
        } else {
            $category_id = self::getCategoryId($category_name);
            if (!$category_id) {
                Error::set(NOT_MATCHING_CATEGORY_NAME);
                return false;
            }
        }
        if ($category_id && $access_id) {
            $db = new Db();
            $category_id = $db->quote($category_id);
            $access_id = $db->quote($access_id);
            $query = "SELECT * FROM menu where category_id = $category_id AND access_type = $access_id AND active = 1 order by menu_order ASC";
            return $db->select($query);
        }
        return false;
    }

    private static function getAccessTypeId($access_type) {
        $db = new Db();
        $access_type = $db->quote($access_type);
        $query = "SELECT * FROM access_type where type =  $access_type AND active = 1";
        $row = $db->select($query);
        if (count($row)) {
            return $row[0]['id'];
        }
        return 0;
    }

    private static function getCategoryId($category_name) {
        $db = new Db();
        $category_name = $db->quote($category_name);
        $query = "SELECT * FROM menu_category where name =  $category_name and active = 1";
        $row = $db->select($query);
        if (count($row)) {
            return $row[0]['id'];
        }
        return 0;
    }

    public static function getMenuSubUrl($name) {
        $db = new Db();
        $name = $db->quote($name);
        $query = "SELECT * FROM page_category where name = $name and active = 1";
        $row = $db->select($query);
        if (count($row) && $row[0]["id"] > 1) {
            return $row[0]['url'] . "/";
        }
        return "";
    }

    public $menu_id = null;
    public $menu_name = null;
    public $category_id = null;
    public $parent_id = null;
    public $image = null;
    public $url = null;
    public $access_type = null;
    public $menu_order = null;
    public $menu_status = null;

    public function tableName() {
        return "menu";
    }

    public function get($key) {
        return $this->$key;
    }

    public function set($key, $val) {
        $this->$key = $val;
    }

    public function getAll() {
        $db = new Db();
        $query = "SELECT m . * , mc.name as category_name, at.type
                    FROM " . $this->tableName() . " m
                    LEFT JOIN menu_category mc ON mc.id = m.category_id 
                    LEFT JOIN access_type at on at.id = m.access_type";
        return $db->select($query);
    }

    public function getName() {
        if (is_numeric($this->menu_id)) {
            $db = new Db();
            $id = $db->quote($this->menu_id);
            $query = "SELECT * FROM " . $this->tableName() . " WHERE id = " . $id;
            return $db->select($query);
        }
        return false;
    }

    public function save() {
        if (is_numeric($this->menu_id) && is_string($this->menu_name)) {
            $db = new Db();
            $id = $db->quote($this->menu_id);
            $name = $db->quote($this->menu_name);
            $category_id = $db->quote($this->category_id);
            $parent_id = $db->quote($this->parent_id);
            $url = $db->quote($this->url);
            $image = $db->quote($this->image);
            $access_type = $db->quote($this->access_type);
            $menu_order = $db->quote($this->menu_order);
            $active = $db->quote($this->menu_status);
            $query = "INSERT INTO " . $this->tableName() . " (id, name, category_id, parent_id, image, url, active, access_type, menu_order) 
                VALUES($id, $name, $category_id, $parent_id,$image, $url, $active, $access_type, $menu_order)
                ON DUPLICATE KEY UPDATE    
                name= $name, category_id=$category_id, parent_id=$parent_id,image=$image, url=$url, access_type=$access_type, menu_order=$menu_order, active=$active";
            if ($db->query($query)) {
                if ($db->affectedRows()) {
                    return true;
                }
            }
        }
        return false;
    }
    public function isMenuExist() {
        $db = new Db();
        $url = $db->quote($this->url);
        $access_type = $db->quote($this->access_type);
        $category_id = $db->quote($this->category_id);

        $query = "SELECT category_id,name, url, access_type FROM " . $this->tableName() . "WHERE url=$url AND access_type = $access_type AND category_id = $category_id ";
        $result = $db->select($query);
        if (isset($result[0]) && count($result[0]) > 0) {
            if ($result[0]['id'] == $this->id) {                
                return TRUE;
            } else if($this->id!=$result[0]['id']) {
                Error::set(MENU_ALREADY_EXIST);
                return FALSE;
            }
        } else {
            return true;
        }
    }

    public function isImageExist() {

        $db = new Db();
        $image = $db->quote($this->image);
        $query = "SELECT image FROM " . $this->tableName() . " WHERE image=$image";
        $result = $db->select($query);
        
       
        if(isset($result[0])&& count($result[0])>0){
            if($result[0]['id']== $this->id){
                return TRUE;
            }elseif ($this->id!=$result[0]['id']) {
                Error::set(IMAGE_ALREADY_EXIST);
                return FALSE;
            }
        }  else {
            return TRUE;
        }
            
        }
    

}

?>