<?php

print_r($_POST);

include "connection.php";

mysqli_query($conn, "INSERT INTO user (Username,Password,usertype) VALUES ('$_POST[Username]', '$_POST[Password]', '$_POST[Usertype]')");

header("location:login.html");

?>
