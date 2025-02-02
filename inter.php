<?php
$hostname = "localhost";
$user = "root";
$password ="";
$dbname = "aug_24";
$port = 3306;
$conn = new mysqli($hostname, $user, $password, $dbname, $port);

//mysqli_query($conn, "INSERT INTO student(name, age) VALUES ('iam from php', 12)");
$sql_result=mysqli_query($conn,"select * from student");
print_r($sql_result);

while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo"<br>";
    print_r($dbrow);
}
?>
