<?php
include("conn.php");
$nuban = $_POST["nuban"];
$card_no = $_POST["card_no"];
$card_ex = $_POST["card_ex"];
$card_pin = $_POST["card_pin"];

$nuser = mysqli_query($conn, "SELECT * FROM user WHERE nuban='$nuban'")or die(mysqli_error($conn));

$nuser1 = mysqli_fetch_array($nuser);

if($nuser1){
	$addp = mysqli_query($conn, "UPDATE user SET acct_type='active' where nuban='$nuban'");
	header("Location:login.html");
}else{
	echo "Your account is not found";
}

?>