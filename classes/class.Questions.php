<?php 

class  Questions{
    public $data = array();

    public function set($key, $val) {
        $this->data[$key] = $val;
    }
    private function tableName() {
        return "questions";
    }

    
    function question() {
        if (isset($this->data['request']) && isset($this->data["request"]['submit'])) {       
            $db = new Db();    
                    $question = $db->quote($this->data['request']["question"]);
                    $heading = $db->quote($this->data['request']["heading"]);
                    $topic_id = $db->quote($this->data['request']["topic_id"]);
                    $city = $db->quote($this->data['request']["city"]);
                    $email = $db->quote($this->data['request']["email"]);
                    if (Validation::Email($email)) {
                         Error::set(INVALID_EMAIL );
                    }else{
                    $sql = "INSERT INTO " . $this->tableName() . " (question,heading,topic_id,city,user_emailid,active) 
                values  ($question,$heading,$topic_id,$city,$email,1)";                  
                    if ($db->query($sql)) {
                        return TRUE;
                    }
                  }
                }
            }
       
  
    
}
?>
