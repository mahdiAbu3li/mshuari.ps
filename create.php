
<?php
$servername="127.0.0.1";
session_start();
$username="root";

$password="root";
$dbname = "mshwari.ps";
$conn= new mysqli($servername,$username,$password,$dbname);
// sql to create table

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$stmt=$conn->prepare("INSERT INTO trips (userid,from1 ,address1,to1,time1,date1,cartype,price,nump) VALUES (?,?,?,?,?,?,?,?,?) ");
$stmt->bind_param("issssssii",$_SESSION["id"],$_GET["from1"],$_GET["address1"],$_GET["to1"],$_GET["time1"],$_GET["date1"],$_GET["cartype"],$_GET["price"],$_GET["nump"]);

for($i=0;$i<30;$i++)
$stmt->execute();

$stmt->close();
$conn->close();
header('Location: http://localhost:80/mshuari.ps/main.php');




?>