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

class MenuCategory extends Menu{
    //put your code here
    
    public $menucategory_id = null;
    public $menucategory_name= null;
    public $menucategory_status= null;
    
    public function tableName(){
        return "menu_category";
        
    }
    
    public function getAll(){
        $db= new Db();
        $query="SELECT * FROM ".$this->tableName();
        return $db->select($query);
    }
    public function getName(){
        if(is_numeric($this->menucategory_id)){
            $db = new Db();
            $id = $db->quote($this->menucategory_id);
            $query = "SELECT * FROM ".$this->tableName()." WHERE id = ".$id;
            return $db->select($query);
        }
        return false;
    }
    public function save(){
        if(is_numeric($this->menucategory_id) && is_string($this->menucategory_name)){
            $db = new Db();
            $id = $db->quote($this->menucategory_id);
            $name = $db->quote($this->menucategory_name);
            $active = $db->quote($this->menucategory_status);
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
