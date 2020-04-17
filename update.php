<?php session_start(); ?>
<?php

$servername="127.0.0.1";

$username="root";

$password="";
$dbname = "mshwari.ps";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table

$sql = "UPDATE user SET 
      first_name = '" .$_GET['fname']."', 
       last_name = '".$_GET['lname'] ."', 
 
       phone = '".$_GET['phone']."', 
       birthday = '". $_GET['birth']."' 
       where user.id = ".$_SESSION['id'] ;
       $conn->multi_query($sql);
     //  echo $sql;
 header('Location: http://localhost:8080/mshuari.ps/main.php#nav-profile');

?>