<?php 
include "config.php";

if(isset($_POST['submit'])){
    $nic=$_POST['nic'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobilenum=$_POST['mobilenum'];
    $vaccinename=$_POST['vname'];
    $vaccinedose =$_POST['dose'];
    $dosage =$_POST['dosage'];
    $date =$_POST['datetime'];
    $center = $_POST['center'];
    $comments = $_POST['comments'];
    
    //SQL statement for inserti,ageng data
    $sql="INSERT INTO vaccinate_tbl(nic,name,age,mobilenum,v_name,v_dose,v_dosage,v_datetime,v_center,comments) VALUES('$nic','$name' ,'$age','$mobilenum','$vaccinename','$vaccinedose','$dosage','$date','$center','$comments');";

    $result=$conn->query($sql); 

    $sql2 = "DELETE  FROM schedule WHERE nic='$nic';";
    $result=$conn->query($sql2); 

    if($result==TRUE){
        echo " Added Successfully ";
            header("location:ViewVaccinate.php");
    }else{
        echo "Error".$sql."".$conn->error;
    }
}
//enter php content here
?>        
