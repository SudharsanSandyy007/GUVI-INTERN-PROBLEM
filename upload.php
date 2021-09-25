<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "guvi";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");

    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
    
    extract($_POST);
    
    if(mysqli_query($conn, "INSERT INTO signup(firstname, lastname, mobile,email,pwd,dob,gender) VALUES('" . $fn . "', '" . $ln. "', '" . $phone . "','" . $email . "','" . $pass . "','" . $dob . "','" . $gender . "')")) {
     echo '1';
     header("Location:./login.php");

     exit;
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
	 
?>