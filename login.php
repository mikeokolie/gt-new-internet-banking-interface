<?php
include("conn.php");
$nuban = $_POST["nuban"];
$card_pin = $_POST["card_pin"];

$nuser = mysqli_query($conn, "SELECT * FROM user WHERE nuban='$nuban' AND card_pin='$card_pin' AND acct_type='active'");

$nuserr = mysqli_fetch_array($nuser);

if($nuserr){
	echo "Login Successful";
}else{
	print "Acct not found";
}

?>
