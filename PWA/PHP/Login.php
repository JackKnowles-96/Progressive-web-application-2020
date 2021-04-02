<?php
    //Vars from form
    $username = $_POST["UserInput"];
    $password = $_POST["PassInput"];

    //Connect to DB
    $mysqli = mysqli_connect("localhost", "1413679", "o3etow", "db1413679");
    
    //Locate User Account
    $result = mysqli_query($mysqli, "select * from Accounts where Username = '$username' and Password ='$password'")
    or die("Failed to query");
 
    //basic login
    $finalresult = mysqli_fetch_array($result);
    //check username and pass and checks them
    if($finalresult["Username"] == $username && $finalresult["Password"] == $password && $username != "" && $password != "") {
        //
        echo ("login completed welcome");
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['Successful'] = "LoggedIn";
        header('location: ../User.php');
    }
    else {
        echo ("Login Failed");
        header('location: ../Index.php');
    }
?>