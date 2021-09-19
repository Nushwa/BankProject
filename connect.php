<?php
$host="localhost";
$user="root";
$pass="";
$db="bank_system";

$connect= mysqli_connect($host,$user,$pass,$db);
if($connect){
    echo "Successfully Connected";
}
else{
    echo"Not Connected";
}