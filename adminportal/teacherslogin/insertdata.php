<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedme_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 $tename = $_POST["name"];
$tepass = $_POST["password"];
$tedept = $_POST["department"];
$sql = "INSERT INTO `teachers`(`te_username`, `password`, `dept`) VALUES ('$tename', '$tepass', '$tedept');";
$result = mysqli_query($conn, $sql);
header("Location: index.php")
?>