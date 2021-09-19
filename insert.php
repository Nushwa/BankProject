<?php
include ("connect.php");

$Name = $_POST['n2'];
$City= $_POST['n3'];
$Account_number=$_POST['n4'];
$Balance =$_POST['n5'];
$Serial_no=$_POST['n1'];
echo "<br>";
echo $Name;
echo "<br>";
echo $City;
echo "<br>";
echo $Serial_no;
echo "<br>";

$query_insert = "Insert into customer(NAME,City,Account_number,Balance,Serial_no) values ('$Name','$City',$Account_number,'$Balance',$Serial_no)";

$transport =mysqli_query($connect,$query_insert);

if($transport){
    echo "Successfully Inserted";
}
else {
    echo"Try Again";
}