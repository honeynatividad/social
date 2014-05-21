<?php

/* 
 * deactivate User
 * by: hanna
 * 
 */

include_once '../class/class_admin_users.php';
session_start();
$id=$_GET['id'];
if(!isset($id)){
    $_SESSION['users_fail']="Something went wrong!";
    header("Location: /view.php");
}
$user = new Users();
$user->userDeactivate($id);