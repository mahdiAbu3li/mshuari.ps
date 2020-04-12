
<?php

$servername="127.0.0.1";
session_start();
$username="root";

$password="root";
$dbname = "mshwari.ps";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,email, pass FROM user";
$result = $conn->query($sql);
$f=false;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"]==$_GET["email"])
        {
            if($row["pass"]==$_GET["pass"])
           { $f=true;
            $_SESSION["id"]=$row["id"];
           }
        break;
        }
    }
} else {
    echo "0 results";
}
if($f)
{    
    header('Location: http://localhost:80/mshuari.ps/main.php');
}
else 
{


}

$conn->close();
?>