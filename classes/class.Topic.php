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
class Topic {
//put your code here
    public $topic_id = null;
    public $topic = null;
    public $active = null;

    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function tableName(){
        return "topic";
    }
    
    public function getAll(){
        $db = new Db();
        $query = "SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    
    public function getName(){
        if(is_numeric($this->topic_id)){
            $db = new Db();
            $topic_id= $db->quote($this->topic_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE  topic_id = ".$topic_id;
            return $db->select($query);
        }
        return false;
    }
    
    public function save(){
        if(is_numeric($this->topic_id) && is_string($this->topic)){
            $db = new Db();
            $topic_id = $db->quote($this->topic_id);
            $topic = $db->quote($this->topic);
            $active = $db->quote($this->active);
            $query = "INSERT INTO ".$this->tableName()." (topic_id, topic, active) VALUES($topic_id,$topic , $active) 
                ON DUPLICATE KEY UPDATE    
               topic= $topic, active=$active";
            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        return false;
    }
}
