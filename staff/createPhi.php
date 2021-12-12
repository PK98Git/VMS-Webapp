<?php
include_once 'database.php';

if(isset($_POST['submit'])){

      $firstName = $_POST ["firstName"]; 
      $lastName = $_POST ["lastName"]; 
      $nic = $_POST['nic']; 
      $ContactNumber = $_POST['ContactNumber'];
      $email = $_POST['email'];
      $qualification = $_POST['qualification'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];

      $sql = "INSERT INTO phis (firstName, lastName, nic, ContactNumber, email,qualification,dob,address,gender  )
      VALUES ('$firstName', '$lastName', '$nic', '$ContactNumber', '$email','$qualification','$dob','$address','$gender' )";
    
      if ($conn->query($sql) === TRUE) {
        header("location:addPhi.php");
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
mysqli_close($conn);
?>