<?php
session_start();
$username = $_SESSION["username"];
//Connect to DB
$mysqli = mysqli_connect("localhost", "1413679", "o3etow", "db1413679");
    
//gets the users Item count
$result = mysqli_query($mysqli, "select * from Accounts where Username = '$username'")
    or die("Failed to query");
$Userarray = mysqli_fetch_array($result);
//gets the DB Item count
$result2 = mysqli_query($mysqli, "SELECT * FROM Items ORDER BY ItemID DESC LIMIT 0, 1")
    or die("Failed to query");
$Itemarray = mysqli_fetch_array($result2);
if($Itemarray["ItemID"] != $Userarray["ItemVer"])
{
    echo (json_encode(array()));
}
?> 


