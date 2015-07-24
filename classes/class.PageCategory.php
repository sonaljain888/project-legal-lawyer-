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

class PageCategory{
    //put your code here
    
    public $pagecategory_id = null;
    public $pagecategory_name= null;
    public $pagecategory_url = null;
    public $pagecategory_status= null;
    
    public function tableName(){
        return "page_category";
        
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
        if(is_numeric($this->pagecategory_id)){
            $db = new Db();
            $id = $db->quote($this->pagecategory_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    public function save(){
        if(is_numeric($this->pagecategory_id) && is_string($this->pagecategory_name)){
            $db = new Db();
            $id = $db->quote($this->pagecategory_id);
            $name = $db->quote($this->pagecategory_name);
            $url = $db->quote($this->pagecategory_url);
            $active = $db->quote($this->pagecategory_status);
            $query = "INSERT INTO ".$this->tableName()." (id, name,url, active) VALUES($id, $name, $url, $active)
                ON DUPLICATE KEY UPDATE    
                name= $name, url=$url, active=$active";
             if($db->query($query)){
                    return true;
            }else{
                Error::set($db->error());
            }
        }
        return false;
    }
}
?>
