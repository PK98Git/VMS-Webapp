<?php 
include "config.php";

if(isset($_GET['id'])){
    
    
    $user_id = $_GET['id'];
    
    //Query
    
    $sql = "Delete FROM stock where stockID = '$user_id'";
    
    //Execute
    
    $result = $conn->query($sql) or die($conn->error);
    
        if($result == TRUE){
           echo "Deleted successfully";
           header("location: viewstock.php");
           
       }else{
           echo "Error:". $sql. "<br>". $conn->error;
       }     
}


?>