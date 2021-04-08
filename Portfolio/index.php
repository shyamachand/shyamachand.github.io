<?php
$host="localhost";
$user="root";
$password="";
$db="portfolio";

// mysql_connect($host,$user,$password);
$mysqli = new mysqli("localhost","root","","portfolio");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
print_r( $_POST);
// mysql_select_db('portfolio');
if(isset($_POST['name'])){
echo"works";
	$Name=$_POST['name'];
	echo  $Name;
	$email=$_POST['email'];
	$Message=$_POST['message'];
	
	$sql="select * from portfolio";

	$result= $mysqli -> query($sql);
	echo $result;
	if(mysqli_num_rows($result)==1){
		echo " TY ";
		exit();
	}
	else{
		echo " Sorry ";
		exit();
	}
 }
?>