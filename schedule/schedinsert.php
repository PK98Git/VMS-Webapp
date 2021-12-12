<?php 
include "config.php";
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

if(isset($_POST['submit'])){
    $nic=$_POST['nic'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobilenum=$_POST['mobilenum'];
    $s_name=$_POST['s_name'];
    $s_dose =$_POST['s_dose'];
    $date =$_POST['s_datetime'];
    $center = $_POST['s_center'];

    //SQL statement for inserti,ageng data
    $sql="INSERT INTO schedule(nic,name,age,mobilenum,s_name,s_dose,s_datetime,s_center) VALUES('$nic','$name' ,'$age','$mobilenum','$s_name','$s_dose','$date','$center');";

    $result=$conn->query($sql); 

    if($result==TRUE){

                if(isset($_POST['mobilenum']) && isset($_POST['s_datetime'])){

                    // Your Account SID and Auth Token from twilio.com/console
                    $sid    = 'your sid'; 
                    $token  ='your token'; 
                    $client = new Client($sid, $token); 

                    $my = "Dear - ";
                    $my .= strval($_POST['name']);
                    $my .= ",  Please come to the Vaccination Center - ";
                    $my .= strval($_POST['s_center']);
                    $my .=" to complete your dose - ";
                    $my .= strval($_POST['s_dose']);
                    $my .=" at  ";
                    $my .= strval($_POST['s_datetime']);
                    $my .= ". Thank you. - VMS - ";


                    //$client = new Client($account_sid, $auth_token);
                    $message = $client->messages->create(
                    // Where to send a text message (your cell phone?)

                    $_POST['mobilenum'],
                        array(
                            'from' => 'your number',
                            'body' => $my,
                        // 'body' => $_POST['s_datetime']
                        )
                    );

                    if($message->$sid){
                        echo "Message sent!";
                    }
                }

            echo " Added Successfully ";
            header("location:addSchedule.php");

    }else{
         echo "you have got this errorError".$sql."".$conn->error;
        
       }

    
}
//enter php content here
?> 