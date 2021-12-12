<?php
include_once 'database.php';

if(isset($_POST['submit'])){

      $name = $_POST ["name"]; 
      $nic = $_POST['nic']; 
      $ContactNumber = $_POST['ContactNumber'];
      $email = $_POST['email'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $province = $_POST['province'];
      $district = $_POST['district'];
      $ds = $_POST['ds'];

      $sql = "INSERT INTO people (name, nic, ContactNumber, email,dob,address,gender,province,district,ds  )
      VALUES ('$name', '$nic', '$ContactNumber', '$email','$dob','$address','$gender','$province','$district','$ds' )";
    
      if ($conn->query($sql) === TRUE) {
        header("location:viewPeople.php");
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
mysqli_close($conn);
?>