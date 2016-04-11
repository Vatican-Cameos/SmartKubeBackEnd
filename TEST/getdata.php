<?php


$con = mysqli_connect("localhost", "root", "sqlmy" ,"roleDb");
$sql = "select * from offersAvailable";
$result = mysqli_query($con,$sql);
$i =0;
if($result -> num_rows >0){
	while($row = $result->fetch_assoc()){
	$myObject["dateTime"] = $row["dateTime"];
	$myObject["name"] = $row["name"];
	$myObject["header"] = $row["header"];
	$myObject["description"] = $row["description"];
        $myObject["oldprice"] = $row["oldprice"];
        $myObject["newprice"] = $row["newprice"];
	$myObject["url"] = $row["url"];
	$arrayOb["MegaMart"][$i++] = $myObject;

}
$arrayOb["company"] = "MegaMart";
}
echo json_encode($arrayOb);

mysqli_close($con);
?>

