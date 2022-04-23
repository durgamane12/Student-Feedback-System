<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedme_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 $stname = $_POST["name"];
$stregno = $_POST["rollno"];
$stpass = $_POST["password"];
$stsem = $_POST["semester"];
$stdept = $_POST["department"];
$class = $stdept."-S".$stsem;
$sql = "INSERT INTO `students`(`rollno`, `st_username`, `class`, `password`) VALUES ('$stregno', '$stname', '$class', '$pass');";
$result = mysqli_query($conn, $sql);
header("Location: dashboard/")
?>