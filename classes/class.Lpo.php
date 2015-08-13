<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Lpo{
    
    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
}
?>
