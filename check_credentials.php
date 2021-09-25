<?php

session_start();

echo "entered!";
echo $_POST["id"];
echo $_POST["pass"];

$_SESSION["id"] = $_POST["id"] ;
$_SESSION["pwd"] = $_POST["pass"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvi";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM signup";
$result = $conn->query($sql);
$msg;

while($data = mysqli_fetch_row($result))
{   
    if( $data[2] == $_POST["id"] || $data[3] == $_POST["id"]  ){
        if($data[4] == $_POST["pass"] ){
            $msg = "LOGGED IN !!!";

            
            header("Location:./profile.php?id=" .$_SESSION['id']."&pwd=".$_SESSION["pwd"] );
            
        }
        else{
            $msg = "INVALID PASSWORD!";
        }
    }
    else{
        $msg = "INVALID ID!";
    }

}

echo $msg;
?>