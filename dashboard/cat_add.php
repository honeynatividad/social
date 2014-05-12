<?php
include("db.php");
session_start();

//if(isset($_SESSION['username'])){
	$cat_name=$_POST['cat_name'];

	if($cat_name!=''){
		$sql = "select * from categories where cat_name = '$cat_name'";
				$result=mysql_query($sql);
				//die($sql);
				$ctr=mysql_num_rows($result);
				if($ctr>0){
					$_SESSION['alert_add_cat2']='Please check your input.';
					header("Location:./cat_mngt.php");
				}
				else{
					$sql="INSERT INTO categories (cat_name) values('$cat_name')";
					mysql_query($sql);
					$_SESSION['alert_add_cat']='Catergory was successfully added.';
					header("Location:./cat_mngt.php");
				}
	}

	else{
		$_SESSION['alert_add_cat2']='Please check your input.';
		header("Location:http:./cat_mngt.php");
	}
//}
//else{
	//header("Location:./index.php");
//}	
?>