<?php
include_once 'database.php';

if(isset($_POST['submit'])){

      $name = $_POST ["name"];  
      $nic = $_POST['nic'];  
      $ContactNumber = $_POST['ContactNumber'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      

      $sql = "INSERT INTO system (name, nic, ContactNumber, email, address, username, password  )
      VALUES ('$name','$nic', '$ContactNumber', '$email','$address','$username', '$password' )";
    
      if ($conn->query($sql) === TRUE) {
        header("location:addSystem.php");
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
mysqli_close($conn);
?>