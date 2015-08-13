<?php 

class  Questions{
   
    public $id = null;
    public $user_id = null;
    public $question = null;
    public $heading = null;
    public $topic_id = null;
    public $city = null;
    public $active = null;

   public function set($key , $val){
        $this->$key = $val;
    }
    
    public function get($key){
        return $this->$key;
    }
    
    private function tableName() {
        return "question";
    }

    public function getAll(){
       $db = new Db();
        $query ="SELECT * FROM ".$this->tableName();
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
    
    function addquestion() {

             $db = new Db();
             $question = $db->quote($this->question);
            $heading = $db->quote($this->heading);
            $topic = $db->quote($this->topic_id);
            $city = $db->quote($this->city);
            $query = "INSERT INTO ".$this->tableName()." (question, heading,topic_id, city, active) 
                VALUES($question,$heading,$topic,$city,1)";
            if($db->query($query)){
                //print_r($query);                exit();
                if($db->affectedRows()){
                    return true;
                }
            }
        }
        
     
       
  
    
}
?>
