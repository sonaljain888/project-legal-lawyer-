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
    public $user_id = null;
    public $heading = null;
    public $post = null;
    public $education = null;
    public $exper_min = null;
    public $exper_max = null;
    public $salary = null;
    public $description = null;
    public $company_name = null;
    public $website = null;
    public $email = null;
    public $phone = null;
    public $city = null;
    public $address = null;
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
    
    public function addjobs(){
        if(is_numeric($this->id)){
            $db = new Db();
            if (Session::read("userid")) {
                $user_id = Session::read("userid");
            $id = $db->quote($this->id);
            $heading= $db->quote($this->heading);
            $post = $db->quote($this->post);
            $education = $db->quote($this->education);
            $exp_min = $db->quote($this->exper_min);
            $exp_max = $db->quote($this->exper_max);
            $salary = $db->quote($this->salary);
            $description = $db->quote($this->description);
            $company_name = $db->quote($this->company_name);
            $website = $db->quote($this->website);
            $email = $db->quote($this->email);
            $phone = $db->quote($this->phone);
            $city = $db->quote($this->city);
            $address = $db->quote($this->address);
            $query = "INSERT INTO ".$this->tableName()." (id,user_id, heading, post, education, exp_min, exp_max,
                salary, description, company_name, company_url, phone, city, address, active)
                VALUES($id ,$user_id,$heading,$post,$education,$exp_min,$exp_max,$salary,$description,$company_name,$website,$email,
                   $phone,$city,$address,1)"; 

            if($db->query($query)){
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        }
        return false;
    }
}
