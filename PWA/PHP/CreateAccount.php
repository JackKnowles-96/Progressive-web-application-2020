<?php
    //vars from form
    $cusername = $_POST["CUserInput"];
    $cpassword = $_POST["CPassInput"];

    //stores connection to database
    $mysqli = mysqli_connect("localhost", "1413679", "o3etow", "db1413679");
    
    //basic Creation
    if($cusername != "" && $cpassword != "") {
    $sql = mysqli_query($mysqli, "INSERT INTO `Accounts` (Username, Password, ItemVer) VALUES ('$cusername', '$cpassword', '0')");
    }
        if($sql){
            $smsg = "User Created Successfully.";
            header('location: ../Index.php');
        }else{
            $fmsg ="User Registration Failed";
            header('location: ../AccountReg.php');
        }
?>