<?php

session_start();
$_SESSION['login_status']=false;

//$conn =new mysqli("localhost", "root", "", "aug_24", 3306);
include "connection.php";
$query = "select * from user where username='$_POST[username]' and password='$_POST[password]'";
// echo $query;
$sql_result = mysqli_query($conn, $query);
// echo "<br>";
// print_r($sql_result);

if ($sql_result->num_rows > 0) {
    echo "Login success";
    $_SESSION['login_status']=true;

    $dbrow = mysqli_fetch_assoc($sql_result);
    print_r($dbrow);

    $_SESSION['userid']=$dbrow['userid'];
    $_SESSION['usertype']=$dbrow['usertype'];
    $_SESSION['username']=$dbrow['username'];
    

    if($dbrow["usertype"]=="buyer"){
        header("location:../buyer/home.php");
    }
    else if($dbrow["usertype"]=="seller"){
        header("location:../seller/home.php");
    }
}
else {
    echo "<h2>Invalid Credentials</h2>";
}

?>
