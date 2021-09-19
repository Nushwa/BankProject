<?php
include ("connect.php");

$Serial_no = $_POST['n1'];
echo"<br>";
echo $Serial_no;

$query = "SELECT Name ,City,Account_number,Balance FROM customer WHERE Serial_no=$Serial_no";
$trans= mysqli_query($connect,$query);
if(mysqli_num_rows($trans) >0)
{
    while ($view_result = mysqli_fetch_assoc($trans))
    {
        $Name = $view_result['Name'];
        $City = $view_result['City'];
        $Account_number = $view_result['Account_number'];
        $Balance = $view_result['Balance'];

        echo "<br>";
        echo "$Name";
        echo "<br>";
        echo $City;
        echo "<br>";
        echo $Account_number;
        echo "<br>";
        echo $Balance;
        echo "<br>";
    }
}
else{
    echo "View Fail";
}