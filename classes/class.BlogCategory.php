  <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author snjain
 */

class BlogCategory {
    //put your code here
    
    public $blogcategory_id = null;
    public $blogcategory_name= null;
    public $blogcategory_status= null;
    
    public function tableName(){
        return "blog_category";
        
    }
    public function get($key){
        return $this->$key;
    }
    
    public function set($key , $val){
        $this->$key = $val;
    }
    
    public function getAll(){
        $db= new Db();
        $query="SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    public function getName(){
        if(is_numeric($this->blogcategory_id)){
            $db = new Db();
            $id = $db->quote($this->blogcategory_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    public function save(){
        if(is_numeric($this->blogcategory_id) && is_string($this->blogcategory_name)){
            $db = new Db();
            $id = $db->quote($this->blogcategory_id);
            $name = $db->quote($this->blogcategory_name);
            $active = $db->quote($this->blogcategory_status);
            $query = "INSERT INTO ".$this->tableName()." (id, name, active) VALUES($id, $name, $active)
                ON DUPLICATE KEY UPDATE    
                name= $name, active=$active";
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
