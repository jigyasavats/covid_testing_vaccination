<?php
$con = mysqli_connect('localhost', 'root', '','db_connect');
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtAge = $_POST['txtAge'];
$txtMessage = $_POST['txtMessage'];
$txtGender = $_POST['txtGender'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldAge` , `fldMessage`, `fldGender`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtAge', '$txtMessage', '$txtGender')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "registered sucesfully...";
}

?>