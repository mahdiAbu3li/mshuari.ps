<?php

$servername="127.0.0.1";

$username="root";

$password="root";
$dbname = "mshwari.ps";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table

$stmt = $conn->prepare("INSERT INTO user (first_name, last_name,email,phone,birthday,pass) VALUES (?, ?,?,?,?,?)");
$stmt->bind_param("sssiss", $_GET["fname"],$_GET["lname"],$_GET["email"],$_GET["phone"],$_GET["birth"],$_GET["pass"]);
$stmt->execute();
$stmt->close();
$conn->close();


?>