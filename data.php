<?php

$Name=$_REQUEST['Name'];
$Address=$_REQUEST['Address'];
$phonenumber= $_REQUEST['phonenumber'];
$psw=$_REQUEST['psw'];
$city=$_REQUEST['city'];
if ( isset($_POST['btnset']))
{

$host = "localhost";
$User = "root";
$password="";
$db="dragoz";

$conn= mysqli_connect($host ,$user , $password , $dragoz  );
$insert= "insert into regess values( '$Name' , '$Address' ,'$phonenumber' , '$psw' , '$city' )";
$myspli_query( $conn , $insert);
if($conn){

echo (" h1  style ='color: green';> Your Regestration is Done ! </h1>");
else(" h1 style = 'color: Red';> Your Regestration is Failed ! </h1>");

}



}