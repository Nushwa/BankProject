<?php
include ("connect.php");

$Serial_no= $_POST['n7'];

$sql="DELETE FROM customer WHERE Serial_no = $Serial_no";
$transport=mysqli_query($connect,$sql);
if($transport){
    echo "<br>";
    echo "$Serial_no";
    echo "<br>";
    echo "Data has been deleted";
}
else{
    echo"Data cannot be Deleted";
}