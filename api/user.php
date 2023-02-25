<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {




    $name=$_POST["username"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
 

    
    $sql = "SELECT * FROM user WHERE name= '$name'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo json_encode("success");
        $_SESSION["login"] = "ok";
       
    }else{
        echo json_encode("fail");
    }


    $conn->close();
    
}else
echo "post yok";










?>