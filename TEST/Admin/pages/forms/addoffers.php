<?php
$dateTime=$_POST['dateTime'];
$name=$_POST['name'];
$description = $_POST['description'];
$header=$_POST['header'];
$oldprice=$_POST['oldprice'];
$newprice=$_POST['newprice'];
$url=$_POST['url'];


$con = mysqli_connect("localhost", "root", "sqlmy" ,"roleDb");
$sql = "insert into offersAvailable values('$dateTime','$name','$header','$description','$oldprice','$newprice','$url')";
mysqli_query($con,$sql);
echo "NOT SURE  .$name";
?>


