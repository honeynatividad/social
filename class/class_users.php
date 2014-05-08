<?php

/* 
 * Functions for Users
 * 
 * 
 */
include_once '../include/config.php';
Class Users{
    var $user_id,
            $username,
            $password,
            $repassword,
            $first_name,
            $last_name,
            $email_address,
            $birth_date,
            $birth_place,
            $phone,
            $mobile_phone,
            $skype,
            $fax,
            $marital_status,
            $city,
            $country,
            $profession,
            $self_description,
            $photos,
            $status,
            $captcha;
    
    public function __construct() {
        $db = new DB_Class();
    }
    
    public function userAdd(){
        $check = $this->checkPassword($this->password, $this->repassword);
        if(!check){
            $_SESSION['user_fail']="Password does not match";
            header("Location: register.php");
        }else{
            $insert = mysql_query("INSERT INTO users (username,password,first_name,last_name,email_address,birth_date,"
                . "birth_place,phone,mobile_phone,skype,fax,marital_status,city,country,profession,self_description,photos,status,captcha)"
                . "VALUES('$this->username','$this->password','$this->first_name','$this->last_name','$this->email_address','$this->birth_date',"
                . "'$this->birth_place','$this->phone','$this->mobile_phone','$this->skype','$this->fax','$this->marital_status','$this->city',"
                . "'$this->country','$this->profession','$this->self_description','$this->photos','$this->status','$this->captcha')");
            $_SESSSION['user_success']="Thank you for registering on our website";
            header("Location: index.php");
        }
        
    }
    
    public function checkPassword($pass,$pass2){
        if($pass!=$pass2)
            return false;
        else
            return true;
    }
    
}