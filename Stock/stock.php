
<?php 
include "config.php";

    
   if(isset($_POST['submit'])){


        $Name = $_POST['Name'];
        $Brand = $_POST['Brand'];
        $Dosage = $_POST['Dosage'];
        $LotNum = $_POST['LotNum'];
        $capacity=$_POST['capacity'];
        $issCapacity=$_POST['issCapacity'];
        $avaCapacity=$_POST['avaCapacity'];
    
    
    //query
    $sql="INSERT INTO stock(Name,Brand,Dosage,LotNum,capacity,issCapacity,avaCapacity) VALUES('$Name','$Brand','$Dosage','$LotNum','$capacity','issCapacity','avaCapacity');";
    

      $result =   $conn->query($sql);
      
      if($result == TRUE){
         echo "New record created successfully";
         header("location: viewstock.php");
         
      }else{
         echo "Error:". $sql. "<br>". $conn->error;
      }     
            
   }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   

<!--bootstrap for form-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


<!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">

    <style>
         .errorMessage{
                color : palevioletred;
                font-size: 15px;
                padding: 5px;
    }
    
    
    </style>


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
                  <li class="breadcrumb-item"><a href="stock.php">Stock</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Stock</li>
                </ol>
              </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
           
    
    <!-- *****Create your content inside the below div**** -->
              <div>
            
        <form class="myForm" id="myForm" onsubmit="return FormValidation()"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >   


         <div class="form-row">
            <div class="form-group col-md-3">
                <label for="stockID">ID</label>
                <input type="text" name="stockID" class="form-control" id="stockID" placeholder="***">
            </div>  
         </div>
             
         <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Name">Vaccine Name</label>
                <input type="text" name="Name" class="form-control" id="Name" placeholder="vaccine name">
                <label class="errorMessage"id="lblname"></label>
            </div> 

            <div class="form-group col-md-6">
                <label for="Brand">Brand</label>
                <input type="text" name="Brand" class="form-control" id="Brand" placeholder="vaccine brand">
                <label class="errorMessage"id="lblbrand"></label>
            </div> 
         </div>   
            
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Dosage">Dosage (ml)</label>
                <input type="text" name="Dosage" class="form-control" id="Dosage" placeholder="dosage in (ml)">
                <label class="errorMessage"id="lbldosage"></label>
            </div> 

            <div class="form-group col-md-6">
                <label for="LotNum">Lot Number</label>
                <input type="text" name="LotNum" class="form-control" id="LotNum" placeholder="lot number">
            </div> 
        </div>    
            
         <div class="form-row">
            <div class="form-group col-md-4">
                <label for="capacity"> Total Capacity</label>
                <input type="text" name="capacity" class="form-control" id="capacity" placeholder="total capacity">
                 <label class="errorMessage"id="lblcapacity"></label>
            </div> 

            <div class="form-group col-md-4">
                <label for="issCapacity">Issued Capacity</label>
                <input type="text" name="issCapacity" class="form-control" id="issCapacity" placeholder="issued capacity">
                <label class="errorMessage"id="lblisscapacity"></label>
            </div> 
            
             <div class="form-group col-md-4">
                <label for="avaCapacity">Available Capacity</label>
                <input type="text" name="avaCapacity" class="form-control" id="avaCapacity" placeholder="available capacity">
                <label class="errorMessage"id="lblavacapacity"></label>
            </div>
        </div>        
            <br>
            <div class="form-row" >
                 <div class="form-group col-md-2"><button type="submit" class="btn btn-primary " name="submit">Add to Stock</button></div> 
             </div>
            </form>
            </div>
            
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
            
            var Name=document.getElementById("Name").value;
            if(Name==''){
                    document.getElementById("lblname").innerHTML="* Enter vaccine name";
                    hasError=true;
                }else if(!isNaN(Name)){
                    document.getElementById("lblname").innerHTML="* Name cannot be a number!";
                    hasError=true;
                }else{
                    document.getElementById("lblname").innerHTML="";
                }
            
 var Brand=document.getElementById("Brand").value;
            if(Brand==''){
                    document.getElementById("lblbrand").innerHTML="* Enter the Brand";
                    hasError=true;
                }else{
                    document.getElementById("lblbrand").innerHTML="";
                }

            
            var Dosage=document.getElementById("Dosage").value;
            if(isNaN(Dosage)){
                document.getElementById("lbldosage").innerHTML="* Dosage can not be text";
                hasError=true;
            }else if(Dosage==""){
                document.getElementById("lbldosage").innerHTML="* Dosage of vaccine is required";
                hasError=true;
            }else{
                document.getElementById("lbldosage").innerHTML="";
            }
            
            var capacity=document.getElementById("capacity").value;
            if(isNaN(capacity)){
                document.getElementById("lblcapacity").innerHTML="* Vaccine capacity can not be text";
                hasError=true;
            }else if(capacity==""){
                document.getElementById("lblcapacity").innerHTML="* Vaccine capacity is required";
                hasError=true;
            }else{
                document.getElementById("lblcapacity").innerHTML="";
            }
            
            var issCapacity=document.getElementById("issCapacity").value;
            if(isNaN(issCapacity)){
                document.getElementById("lblisscapacity").innerHTML="* Issued capacity can not be text";
                hasError=true;
            }else if(issCapacity==""){
                document.getElementById("lblisscapacity").innerHTML="* Issued capacity is required";
                hasError=true;
            }else{
                document.getElementById("lblisscapacity").innerHTML="";
            }
            
             var avaCapacity=document.getElementById("avaCapacity").value;
            if(isNaN(avaCapacity)){
                document.getElementById("lblavacapacity").innerHTML="* Avaiable capacity can not be text";
                hasError=true;
            }else if(avaCapacity==""){
                document.getElementById("lblavacapacity").innerHTML="* Avaiable capacity is required";
                hasError=true;
            }else{
                document.getElementById("lblavascapacity").innerHTML="";
            }


         if(hasError==true){
                return false;
            }
        
        }
    
    </script>



</body>

</html>