<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['scl']) && isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['sem']) && isset($_POST['cat']) && isset($_POST['per']) && isset($_POST['ded']) && isset($_POST['sta'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['scl'];
	$p = $_POST['sid'];
	$c = $_POST['sname'];
	$d = $_POST['sem'];
	$s = $_POST['cat'];
	$g = $_POST['per'];
	$h = $_POST['ded'];
	$i = $_POST['sta'];
	
	
	$sql = " INSERT INTO scholarship VALUES( '$u', '$p', '$c', '$d','$s', '$g','$h', '$i') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: Scholarship_info.php");
	}
	else{
		echo "Insertion Failed";
		//header("Location: Insert_Scholarship.php");
	}
	}


?>