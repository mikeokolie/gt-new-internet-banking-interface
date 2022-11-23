<?php
include("conn.php");
include("regform.php");
$nuban = $_POST["nuban"];
$card_no = $_POST["card_no"];
$card_ex = $_POST["card_ex"];
$card_pin = $_POST["card_pin"];

if($nuser1){
	$nuser2 = mysqli_query($conn, "INSERT INTO user_acct VALUES(NULL, '$nuban','$card_no','$card_ex','$card_pin',NOW())")or die(mysqli_error($conn));
}
if($nuser2){
	print "Account created successful".mysqli_error($conn);
}
?>