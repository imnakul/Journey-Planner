<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','jp_contact');

// get the post records
$txtFName = $_POST['firstname'];
$txtLName = $_POST['lastname'];
$txtEmail = $_POST['txtemail'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldfName`, `fldlname`, `fldemail`, `fldMessage`) VALUES ('0', '$txtFName', '$txtLName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>