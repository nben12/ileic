<?php
include 'conexion.php';
$user = $_POST['user'];
$pass = $_POST['psw'];
$stmt ="SELECT * FROM users WHERE email =\"$user\" AND password=\"$pass\"";
$result = mysqli_query($conn, $stmt);

$row = mysqli_fetch_assoc($result);
$usty=$row["user_type"];
session_start();
$_SESSION["favcolor"] = $row["id"];
if($usty=="student"){
header("location:students.php");
}
else if($usty=="teacher"){
    header("location:teacher.php");
    }
else{
    header("location:teachers.php");
}

?>