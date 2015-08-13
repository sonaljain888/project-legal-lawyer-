<?php

class User {

    public $user_id = null;
    public $role_id = null;
    public $name = null;
    public $email_id = null;
    public $password = null;
    public $re_pass = null;
    public $website = null;
    public $mobile = null;
    public $add = null;
    public $city = null;
    public $location = null;
    public $education = null;
    public $experince = null;
    public $specialization = null;
    public $practicing_court = null;
    public $image = null;
    public $active = null;

    public function tableName() {
        return "user";
    }

    public function get($key) {
        return $this->$key;
    }

    public function set($key, $val) {
        $this->$key = $val;
    }

    function login() {
        if ($this->checkUserEmail($this->email_id)) {
            if ($this->checkpassword($this->password)) {
                $db = new Db();
                $mailid = $db->quote($this->email_id);
                $pass = $db->quote($this->password);
                $query = "SELECT * FROM " . $this->tableName() . " WHERE EmailId = $mailid and Password = $pass ";
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

    public function checkpassword() {
        if (!Validation::password_length($this->password)) {
            Error::set(INVALID_PASSWORD_LENGTH);
            return FALSE;
        } elseif (!Validation::valid_password($this->password)) {
            Error::set(INVALID_PASSWORD . " " . INVALID_PASSWORD_CHARACTER . " " . INVALID_PASSWORD_UPPERCASE . " " . INVALID_PASSWORD_NUMBER . " " . INVALID_PASSWORD_LOWERCASE);
            return FALSE;
        } else {
            //return md5($this->password);
            return TRUE;
        }
    }

    public function matchPass() {
        
    }

    public function registration() {
        //Check Password 
        $this->checkpassword();
        //Check Email id is exist
        $this->isEmailExist();
        //Check Mobile number is exist
        $this->isMobileExist();
        $errors = Error::get("error");
        if (!count($errors) || $errors == "") {
            $db = new Db();
            $name = $db->quote($this->name);
            $email = $db->quote($this->email_id);
            $pass = $db->quote($this->password);
            $website = $db->quote($this->website);
            $mobile = $db->quote($this->mobile);
            $add = $db->quote($this->add);
            $city = $db->quote($this->city);
            $location = $db->quote($this->location);
            $education = $db->quote($this->education);
            $experience = $db->quote($this->experince);
            $specialization = $db->quote($this->specialization);
            $pra_court = $db->quote($this->practicing_court);
            $query = "INSERT INTO " . $this->tableName() . " (Name,EmailId,Password,Website,Mobile,Address,City,Location,Education,
                Experiance,Specialization,PracticingCourt,active)
                values($name, $email, $pass,$website,$mobile,$add,$city,$location,$education,$experience,
                $specialization,$pra_court,1)";
            
            if ($db->query($query)) {
                if ($db->affectedRows()) {
                    return true;
                }
            }
        }
        return false;
    }

    public function isEmailExist() {
        $db = new Db();
        $email = $db->quote($this->email_id);
        $query = "SELECT * FROM " . $this->tableName() . " WHERE EmailId = $email";
        $result = $db->select($query);
        if (count($result)) {
            Error::set(EMAIL_ALREADY_EXIST);
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function isMobileExist() {
        $db = new Db();
        $mobile = $db->quote($this->mobile);
        $query = "SELECT * FROM " . $this->tableName() . " WHERE Mobile = $mobile";
        $result = $db->select($query);
        if (count($result)) {
            Error::set(MOBILE_NO_ALREADY_EXIST);
            return FALSE;
        } else {
            return TRUE;
        }
    }

   public function profile($user_id = 0) {
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

    function getall() {
        $db = new Db();
        $query = "SELECT * FROM " . $this->tableName();
        return $db->select($query);
    }
    
    public function getName() {
        if (is_numeric($this->user_id)) {
            $db = new Db();
            $id = $db->quote($this->user_id);
            $query = "SELECT * FROM " . $this->tableName() . " WHERE UserId = " . $id;
            return $db->select($query);
        }
        return false;
    }

    function editProfile($user_id) {
        
        $errors = Error::get("error");
        if (!count($errors) || $errors == "") {
            $db = new Db();
             if (Session::read("userid")) {
                $user_id = Session::read("userid");
            //$user_id= $db->quote($this->user_id);
            $name = $db->quote($this->name);
            $website = $db->quote($this->website);
            //$mobile = $db->quote($this->mobile);
            $add = $db->quote($this->add);
            $city = $db->quote($this->city);
            $location = $db->quote($this->location);
            $education = $db->quote($this->education);
            $experience = $db->quote($this->experince);
            $specialization = $db->quote($this->specialization);
            $pra_court = $db->quote($this->practicing_court);
            $query = "update user  set Name=$name, Website=$website, Address=$add,
                City=$city, Location=$location, Education=$education, Experiance=$experience, Specialization=$specialization,
                    PracticingCourt=$pra_court  where UserId=$user_id";
                if ($db->query($query)) {
                if ($db->affectedRows()) {
                    return true;
                }
            }
             }  }
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
    
    public function jobs(){
        
        $jobs= new Jobs();
        return $jobs->getAll();
        
    }

}
?>






