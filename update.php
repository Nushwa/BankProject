<?php
include "connect.php";
$name = $_POST['n2'];
$city = $_POST['n3'];
$Accountno = $_POST['n4'];
$balance = $_POST['n5'];
$serialno = $_POST['n1'];
echo "<br>";
echo $name;
echo "<br>";
echo $city;
echo "<br>";
echo $Accountno;
echo "<br>";
echo $balance;
echo "<br>";
echo $serialno;
echo "<br>";

$query = "Update customer set Name='$name', City='$city',Balance='$balance',Account_number=$Accountno where Serial_no = $serialno";
$transport = mysqli_query($connect,$query);
if($transport){
    echo "Updated";
}
else{
    echo "Cannot Update";
}
