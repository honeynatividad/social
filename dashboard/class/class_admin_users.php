<?php
/* 
 * Functions for Admin Users
 * 
 * 
 */
include_once '../../include/config.php';
include_once '../../smtp/class.phpmailer.php';
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
        if(!$check){
            $_SESSION['user_fail']="Password does not match";
            header("Location: register.php");
        }else{
            $email = $this->email_address;
            $activation=md5($email.time());
            $password = md5($this->password);
            $insert = mysql_query("INSERT INTO users (username,password,first_name,last_name,email_address,birth_date,"
                . "birth_place,phone,mobile_phone,skype,fax,marital_status,city,country,profession,self_description,validation_code)"
                . "VALUES('$this->username','$password','$this->first_name','$this->last_name','$this->email_address','$this->birth_date',"
                . "'$this->birth_place','$this->phone','$this->mobile_phone','$this->skype','$this->fax','$this->marital_status','$this->city',"
                . "'$this->country','$this->profession','$this->self_description','$activation')");
            if(!$insert) die ("An error occur during submitting of your data. ".mysql_error())  ;
            $body = 'Username:'.$this->username;
            $body .='<br>Activation code: <a href="http://'.$_SERVER['SERVER_NAME'].'/dashboard/users/validate_email.php?id='.$activation.'">'.$activation.'</a>';
            $this->sendMail($email,'Registration of Social',$body);
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
    public function sendMail($to,$subject,$body){
        
        $from       = "test@erikasbarbershop.com";
        $mail       = new PHPMailer();
        $mail->IsSMTP(true);            // use SMTP
        $mail->IsHTML(true);
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->Host       = "mail.erikasbarbershop.com"; // SMTP host
        $mail->Port       =  26;                    // set the SMTP port
        $mail->Username   = "test@erikasbarbershop.com";  // SMTP  username
        $mail->Password   = "qwepoi123456";  // SMTP password
        $mail->SetFrom($from, 'Admin Social');
        $mail->AddReplyTo($from,'Admin Social');
        $mail->Subject    = $subject;
        $mail->MsgHTML($body);
        $address = $to;
        $mail->AddAddress($address, $to);
        $mail->Send(); 
    }
    
    public function validateEmail($id){
        $search = mysql_query("SELECT * FROM users WHERE validation_code='$id' AND confirmed='0'");
        $count = mysql_num_rows($search);
        if($count==1){
            $update = mysql_query("UPDATE users SET confirmed=1,status=1 WHERE validation_code='$id'");
            $_SESSION['user_success']='You successfully validated your account';
            header("Location: index.php");
        }else{
            $_SESSION['user_success']='An error occured while validation of your account';
            header("Location: index.php");
        }
    }
    
    public function userView($id){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM users WHERE users_id='$id'");
        while($row = mysql_fetch_array($search)){
            $list[$i]['users_id'] = $row['users_id'];
            $list[$i]['first_name'] = $row['first_name'];
            $list[$i]['last_name'] = $row['last_name'];
            $list[$i]['email_address'] = $row['email_address'];
            $list[$i]['birth_date'] = $row['birth_date'];
            $list[$i]['birth_place'] = $row['birth_place'];
            $list[$i]['phone'] = $row['phone'];
            $list[$i]['mobile_phone'] = $row['mobile_phone'];
            $list[$i]['skype'] = $row['skype'];
            $list[$i]['fax'] = $row['fax'];
            $list[$i]['marital_status'] = $row['marital_status'];
            $list[$i]['city'] = $row['city'];
            $list[$i]['country'] = $row['country'];
            $list[$i]['profession'] = $row['profession'];
            $list[$i]['self_description'] = $row['self_description'];            
            $i++;
        }
        return $list;
    }
    
    public function usersCount(){
        $search = mysql_query("SELECT * FROM users");
        $count = mysql_num_rows($search);
        return $count;
    }
    
    public function userList(){
        $i=0;
        $list = array();
        $search = mysql_query("SELECT * FROM users");
        while($row = mysql_fetch_array($search)){
            $list[$i]['users_id'] = $row['users_id'];
            $list[$i]['first_name'] = $row['first_name'];
            $list[$i]['last_name'] = $row['last_name'];
            $list[$i]['email_address'] = $row['email_address'];
            $list[$i]['birth_date'] = $row['birth_date'];
            $list[$i]['birth_place'] = $row['birth_place'];
            $list[$i]['phone'] = $row['phone'];
            $list[$i]['mobile_phone'] = $row['mobile_phone'];
            $list[$i]['skype'] = $row['skype'];
            $list[$i]['fax'] = $row['fax'];
            $list[$i]['marital_status'] = $row['marital_status'];
            $list[$i]['city'] = $row['city'];
            $list[$i]['country'] = $row['country'];
            $list[$i]['profession'] = $row['profession'];
            $list[$i]['self_description'] = $row['self_description'];            
            $i++;
        }
        return $list;
    }
        
    }

