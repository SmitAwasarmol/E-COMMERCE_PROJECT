<?php

//print_r($_POST);
//echo "<br>";
//print_r($_FILES);
session_start();

$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

$conn=new mysqli("localhost","root","","aug_24",3306);

$query="insert into product(name,price,details,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[details]','$target',$_SESSION[userid])";

//echo "<br> $query <br>";

$sql_status=mysqli_query($conn,$query);

if($sql_status){
    echo "product uploaded successfully";
}
else{
    echo " error in sql".mysqli_query($conn);
}
?>