<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','cakedata');

// get the post records
        $uname = $_GET['uname'];
        $email = $_GET['email'];
        $contact = $_GET['contact'];
        $flavour = $_GET['flavour'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        $kg = $_GET['kg'];
        $ad = $_GET['ad'];
        $button = $_GET['register'];


// database insert SQL code
$query = "INSERT INTO cakeorder VALUES ('$uname','$email','$contact','$flavour','$date','$time','$kg','$ad')";

// insert in database 
$rs = mysqli_query($con, $query);

if($rs)
{
	echo "Order Placed";
}
else
echo "ERROR ";
?>
