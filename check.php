
<?php
$servername="127.0.0.1";
session_start();
$username="root";

$dbname = "mshwari.ps";
$conn= new mysqli($servername,$username,"",$dbname);

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
           {
                $f=true;
            $_SESSION["id"]=$row["id"];
           }
        break;
        }
    }
} else {
    echo "0 results";
}
$x = 0;
if($f==true)
{    
    $x++;
    print 't';
    //  header('Location: http://localhost:8080/mshuari.ps/main.php');
}
else 
{
 print 'f';
    // header('Location: http://localhost:8080/mshuari.ps/login-ps.html');
}
$conn->close();
?>