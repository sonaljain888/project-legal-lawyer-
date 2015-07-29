<?php

class User {

    public $data = array();

    public function set($key, $val) {
        $this->data[$key] = $val;
    }

    function login() {
        if (isset($this->data['request']) && isset($this->data["request"]['submit'])) {
            if ($this->checkUserEmail($this->data['request']['email'])) {
                if ($this->checkpassword($this->data['request']['password'])) {
                    $db = new Db();
                    $mailid = $db->quote($this->data['request']["email"]);
                    $pass = $db->quote($this->data['request']["password"]);
                    $query = "select * from " . $this->tableName() . " where EmailId=$mailid and Password=$pass ";
                    $row = $db->select($query);
                    if (count($row) == 0) {
                        Error::set(ACCOUNT_IS_NOT_EXIST);
                        return FALSE;
                    } else if ($row[0]["active"] == 0) {
                        Error::set(ACCOUNT_IS_BLOCKED);
                        return FALSE;
                    } else {
                        Session::write("email", $row[0]["EmailId"]);
                        Session::write("userid", $row[0]["UserId"]);
                        Session::write("access_type", $row[0]["RoleId"]);
                        return TRUE;
                    }
                }
            }
        }
        return false;
    }

    private function tableName() {
        return "user";
    }

    public function checkUserEmail($email) {
        if (strlen($email)) {
            if (!Validation::Email($email)) {
                Error::set(INVALID_EMAIL);
            } else {
                $db = new Db();
                $email = $db->quote($email);
                $query = "SELECT UserId FROM " . $this->tableName() . " WHERE EmailId = $email";
                $row = $db->select($query);
                if (!count($row)) {
                    Error::set(ACCOUNT_IS_NOT_EXIST);
                    return false;
                } else {
                    return true;
                }
            }
        } else {
            Error::set(INVALID_EMAIL_FORMAT);
            return FALSE;
        }
    }

    public function checkpassword($Pass) {
        if (strlen($Pass)) {
            if (!Validation::valid_password($Pass)) {
                Error::set(INVALID_PASSWORD);
                return FALSE;
            } else {
                //return md5($Pass);
                return TRUE;
            }
        }
    }

    function registration() {
        if (isset($this->data['request']) && isset($this->data["request"]['submit'])) {
            if($this->isEmailExist($this->data['request']["email"])) {
                    if($this->isMobileExist($this->data['request']["mobile"])) { 
            $db = new Db();    
                    $name = $db->quote($this->data['request']["name"]);
                    $email = $db->quote($this->data['request']["email"]);
                    $pass = $db->quote($this->data['request']["password"]);
                    $website = $db->quote($this->data['request']["website"]);
                    $mobile = $db->quote($this->data['request']["mobile"]);
                    $add = $db->quote($this->data['request']["add"]);
                    $city = $db->quote($this->data['request']["city"]);
                    $location = $db->quote($this->data['request']["location"]);
                    $education = $db->quote($this->data['request']["education"]);
                    $experience = $db->quote($this->data['request']["experience"]);
                    $specialization = $db->quote($this->data['request']["specialization"]);
                    $pra_court = $db->quote($this->data['request']["pra_court"]);
                    if ((Validation::Email($email))&& (Validation::valid_password($pass))) {
                         Error::set(INVALID_EMAIL && INVALID_PASSWORD);
                    }else{
                    $sql = "INSERT INTO " . $this->tableName() . " (Name,EmailId,Password,Website,Mobile,Address,City,Location,Education,
                Experiance,Specialization,PracticingCourt,active) 
                values  ($name,$email,$pass,$website,$mobile,$add,$city,$location,$education,$experience,
                $specialization,$pra_court,1)";                  
                    if ($db->query($sql)) {
                        return TRUE;
                    }
                  }
                }
            }
       }
  }
   
public function isEmailExist($email) {

        $db = new Db();       
$email = $db->quote($email);
$query = "SELECT * FROM " . $this->tableName() . " WHERE EmailId=$email";
        $result = $db->select($query);
        if(count($result)){
                Error::set(EMAIL_ALREADY_EXIST);
                return FALSE;
            } else {
            return TRUE;
        }
            
        }
public function isMobileExist($mobile) {

        $db = new Db();       
$mobile = $db->quote($mobile);
$query = "SELECT * FROM " . $this->tableName() . " WHERE Mobile=$mobile";
        $result = $db->select($query);
        if(count($result)){
                Error::set(MOBILE_NO._ALREADY_EXIST);
                return FALSE;
            } else {
            return TRUE;
        }          
        }
        
    function profile($user_id = 0) {
        if ($user_id == 0) {
            if (Session::read("userid")) {
                $user_id = Session::read("userid");
            }
        }
        if ($user_id > 0) {
            $db = new Db();
            $user_id = $db->quote($user_id);
            $query = "SELECT * FROM " . $this->tableName() . " WHERE UserId = $user_id";
            return $db->select($query);
        }
        return false;
    }

    function userupdate() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $name = $db->quote($_REQUEST["name"]);
            $email = $db->quote($_REQUEST["email"]);
            $password = $db->quote($_REQUEST["password"]);
            $website = $db->quote($_REQUEST["website"]);
            $mobile = $db->quote($_REQUEST["mobile"]);
            $add = $db->quote($_REQUEST["add"]);
            $city = $db->quote($_REQUEST["city"]);
            $location = $db->quote($_REQUEST["location"]);
            $education = $db->quote($_REQUEST["education"]);
            $experience = $db->quote($_REQUEST["experience"]);
            $specialization = $db->quote($_REQUEST["specialization"]);
            $pra_court = $db->quote($_REQUEST["pra_court"]);
            $image = $db->quote($_FILES["image"]["name"]);
            $imgtemp = $db->quote($_FILES["image"]["tmp_name"]);
            move_uploaded_file($imgtemp, "../images/" . $image);
            $sql = "update user  set Name=$name,EmailId=$email,Password=$password,Website=$website,Mobile=$mobile,Address=$add,
                City=$city,Location=$location,Education=$education,Experiance=$experience,Specialization=$specialization,
                    PracticingCourt=$pra_court,Image=$image where UserId=$sid";
            $db->query($sql);
        }
    }

    function deleteuser() {
        $db = new Db();
        $sid = $_SESSION['id'];
        $sql = "delete from user where UserId=$sid";
        $db->query($sql);
    }

    public function home() {
        if (Session::read("access_type")) {
            $access_id = Session::read("access_type");
        } else {
            $access_id = 0;
        }
        $access_type = Validation::getAccessType($access_id);
        $category_name = $access_type;
        return Menu::getMenus($access_type, $category_name);
    }

    public function logout($id = 0) {
        Session::logOut();
        return true;
    }

}
?>






