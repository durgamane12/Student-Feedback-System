<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedme_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 $hodname = $_POST["name"];
$hodpass = $_POST["password"];
$hoddept = $_POST["department"];
$sql = "INSERT INTO `hods`(`hod_username`, `password`, `dept`) VALUES ('$hodname', '$hodpass', '$hoddept');";
$result = mysqli_query($conn, $sql);
header("Location: index.php")
?>