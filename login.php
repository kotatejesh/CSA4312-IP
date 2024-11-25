<?php
$Servername="localhost";
$username="root";
$password=" ";
$dbname="login";
$conn=new mysqli($Servername, $username, $password, $dbname);
$st=$conn->prepare("INSERT INTO agents VALUES (?,?,?,?,?)");
$st->bind_param("siiss", $email, $password);
$email=$-POST["email"];
$password=$-POST["password"];
$st->execute();
echo "SUCCESS!";
header("refresh=3; url=login page for bus.html");
$st->close();
$conn->close();
?>