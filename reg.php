<?php session_start();?>
 <?php

$servername = "127.0.0.1";

$username = "root";

$password = "root";
$dbname = "mshwari.ps";
$conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
echo  $_SESSION['id'];
        $sql = "UPDATE trips SET 
  currentp = currentp+1 where trips.id = ".$_GET['id'] ;
 $conn->multi_query($sql);
  $stmt = $conn->prepare("INSERT INTO history (user, trip) VALUES (?, ?)");
  $stmt->bind_param("ii", $_SESSION['id'],$_GET['id']);
  $stmt->execute();
  $stmt->close();


 //echo $sql;
       header('Location: http://localhost:80/mshuari.ps/main.php#nav-available-trip');

?>