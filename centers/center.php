<?php 
include "config.php";

    
   if(isset($_POST['submit'])){


    $province=$_POST['province'];
    $district=$_POST['district'];
    $division=$_POST['division'];
    $residents=$_POST['residents'];
    $vaccination_capacity=$_POST['vaccination_capacity'];
    
    
    //query
    $sql="INSERT INTO center(province,district,division,residents,vaccination_capacity) VALUES('$province','$district','$division','$residents','$vaccination_capacity');";
    

      $result =   $conn->query($sql);
      
      if($result == TRUE){
         echo "New record created successfully";
         header("location: viewcenter.php");
         
      }else{
         echo "Error:". $sql. "<br>". $conn->error;
      }     
      
      
   }

    

//enter php content here
?>

<!DOCTYPE html>
<html>
<head>
    
    <style>
         .errorMessage{
                color : palevioletred;
                font-size: 15px;
                padding: 5px;
    }
    
    
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!--bootstrap for form-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include '../navbar.php' ?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info ">
                        <i class="bi bi-menu-button-fill"></i>
                        <span></span>
                    </button>
                    <h3 style="margin-right: 30%;">Vaccination Management System</h3>
                </div>
            </nav>
            <!-- ***** edit  breadcrumb according to your page**** -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Center</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Center</li>
                </ol>
              </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
           
    
    <!-- *****Create your content inside the below div**** -->
    <div>
            
            <form class="myForm" id="myForm" onsubmit="return FormValidation()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="province">Province</label>
                    <select id="province" class="form-control"  name ="province">
                    <option selected value="none">Choose a Province</option>
                    <option>Central</option>
                    <option>Eastern</option>
                    <option>North Central</option>
                    <option>Northern</option>
                    <option>North Western</option>
                    <option>Sabaragamuwa</option>
                    <option>Southern</option>
                    <option>Uva</option>
                    <option>Western</option>
                  </select>
                    <label class="errorMessage"id="lblprovince"></label>
                   
                </div>
                <div class="form-group col-md-6">
                  <label for="district">District</label>
                    <select id="district" name="district" class="form-control">
                    <option selected value="none">Choose a district </option>
                    <option>Ampara</option>
                    <option>Anuradhapura</option>
                    <option>Badulla</option>
                    <option>Batticaloa</option>
                    <option>Colombo</option>
                    <option>Galle</option>
                    <option>Gampaha</option>
                    <option>Hambantota</option>
                    <option>Jaffana</option>
                    <option>Kalutara</option>
                    <option>Kanady</option>
                    <option>Kegalle</option>
                    <option>Kilinochchi</option>
                    <option>Kurunegala</option>
                    <option>Manner </option>
                    <option>Matale</option>
                    <option>Matara</option>
                    <option>Monaragala</option>
                    <option>Mullaitivu</option>
                    <option>Nuwara Eliya</option>
                    <option>Polonnaruwa</option>
                    <option>Puttalam</option>
                    <option>Ratnapura</option>
                    <option>Trincomalee</option>
                    <option>Vavuniya</option>
                  </select>
                <label class="errorMessage"id="lbldistrict"></label>
              
                </div>
              </div>
             <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="division">Division</label>
                    <input type="text" name="division" class="form-control" id="division" placeholder="Enter Division">
                    <label class="errorMessage"id="lbldivision"></label>
                   
                    
                  </div>
                  <div class="form-group col-md-6">
                    <label for="residents">No of Residents</label>
                    <input type="text" name="residents" class="form-control" id="residents" placeholder="0">
                    <label class="errorMessage"id="lblresidents"></label>
    
                   
                  </div>
            </div>
            
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="vaccination_capacity">Vaccination Capacity</label>
                  <input type="text" name="vaccination_capacity" class="form-control" id="vaccination_capacity" placeholder="0">
                    <label class="errorMessage"id="lblvaccination_capacity"></label>

                </div>
              </div>
             <div class="form-row col-sm" >
                 <div class="form-group col-md-2"><button type="submit" class="btn btn-primary float-right" name="submit">Add Center</button></div> 
             </div>
              
            </form>
            
            </div>
            <!-- *****End of editing div**** -->
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    
    
    <script>
        
        function FormValidation(){
            
             var hasError=false;
            
            var division=document.getElementById("division").value;
            if(division==''){
                    document.getElementById("lbldivision").innerHTML="* Division is required!";
                    hasError=true;
                }else if(!isNaN(division)){
                    document.getElementById("lbldivision").innerHTML="* Division can not be a number!";
                    hasError=true;
                }else{
                    document.getElementById("lbldivision").innerHTML="";
                }
            
            
            if(document.forms["myForm"]["province"].value=='none'){
                document.getElementById("lblprovince").innerHTML="* Province is required";
                hasError=true;
            }else{
                document.getElementById("lblprovince").innerHTML ="";
            }
            
             if(document.forms["myForm"]["district"].value=='none'){
                document.getElementById("lbldistrict").innerHTML="* District is required";
                hasError=true;
            }else{
                document.getElementById("lbldistrict").innerHTML ="";
            }
            
            var residents=document.getElementById("residents").value;
            if(isNaN(residents)){
                document.getElementById("lblresidents").innerHTML="* Number of resident can not be text";
                hasError=true;
            }else if(residents==""){
                document.getElementById("lblresidents").innerHTML="* Number of residents is required";
                hasError=true;
            }else{
                document.getElementById("lblresidents").innerHTML="";
            }
            
            var vaccination_capacity=document.getElementById("vaccination_capacity").value;
            if(isNaN(vaccination_capacity)){
                document.getElementById("lblvaccination_capacity").innerHTML="* Vaccination capacity can not be text";
                hasError=true;
            }else if(vaccination_capacity==""){
                document.getElementById("lblvaccination_capacity").innerHTML="* Vaccination capacity is required";
                hasError=true;
            }else{
                document.getElementById("lblresidents").innerHTML="";
            }
            
            
         if(hasError==true){
                return false;
            }
        
        }
    
    </script>
    
</body>

</html>