<?php 
include "config.php";

if(isset($_REQUEST['id'])){
    
    $id = $_REQUEST['id'];
    
    $sql = "Select * from center where center_id ='$id'";
    
    $result = $conn->query($sql) or die($conn->error);
    
    if($row = $result->fetch_assoc()){
        
        $center_id = $row['center_id'];
        $province = $row['province'];
        $district = $row['district'];
        $division = $row['division'];
        $residents=$row['residents'];
        $vaccination_capacity=$row['vaccination_capacity'];
        
     }
}


if(isset($_POST['update'])){
    
    $province = $_POST['province'];
    $district = $_POST['district'];
    $division = $_POST['division'];
    $residents = $_POST['residents'];
    $vaccination_capacity = $_POST['vaccination_capacity'];
    $center_id = $_POST['center_id'];
    
    
    //query;
    $sql = "UPDATE center set province = '$province', division = '$division', district ='$district', residents = '$residents', vaccination_capacity = '$vaccination_capacity' where center_id = '$center_id'";
    
    $result=$conn->query($sql);
    
    if($result == TRUE){
           echo "New record Updated successfully";
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Vaccination Management System</h3>
                <strong>VMS</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                          </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Vaccination
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">View Vaccination</a>
                        </li>
                        <li>
                            <a href="#">Vaccinate next</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-users"></i>
                        People
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu1">
                        <li>
                            <a href="#">View People</a>
                        </li>
                        <li>
                            <a href="#">Add People</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-md"></i>
                        Staff
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu2">
                        <li>
                            <a href="#">View Staff</a>
                        </li>
                        <li>
                            <a href="#">Add Doctor</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-archive"></i>
                        Stock
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu3">
                        <li>
                            <a href="#">View Stock</a>
                        </li>
                        <li>
                            <a href="#">Add Stock</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-hospital"></i>
                        Centers
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu4">
                        <li>
                            <a href="viewcenter.php">View Centers</a>
                        </li>
                        <li>
                            <a href="center.php">Add Center</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-calendar-check"></i>
                        Schedule
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu5">
                        <li>
                            <a href="#">View Schedule</a>
                        </li>
                        <li>
                            <a href="#">Add Schedule</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-phone-square"></i>
                        Contact US
                    </a>
                </li>
            </ul>
        </nav>

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
                     <li class="breadcrumb-item"><a href="#">View center</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update center</li>
                </ol>
              </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
           
    
    <!-- *****Create your content inside the below div**** -->
        <div>
                  
            <form class="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                      
            <input type="hidden" name="center_id" value="<?php echo $center_id ; ?>" >
                    
                      
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="province">Province</label>
                    <select id="inputprovince" class="form-control"  name ="province" required>
                    <option value="central"  <?php if($province == 'center'){echo "selected";} ?> >Central</option>
                    <option value="eastern"  <?php if($province == 'eastern'){echo "selected";} ?> >Eastern</option>
                    <option value="north central"  <?php if($province == 'north central'){echo "selected";} ?>>North Central</option>
                    <option value="northern"  <?php if($province == 'northern'){echo "selected";} ?>>Northern</option>
                    <option value="north western"  <?php if($province == 'north western'){echo "selected";} ?>>North Western</option>
                    <option value="sabaragamuwa"  <?php if($province == 'sabaragamuwa'){echo "selected";} ?>>Sabaragamuwa</option>
                    <option value="southern"  <?php if($province == 'southern'){echo "selected";} ?>>Southern</option>
                    <option value="uva"  <?php if($province == 'uva'){echo "selected";} ?>>Uva</option>
                    <option value="western"  <?php if($province == 'western'){echo "selected";} ?>>Western</option>
                  </select>
                   
                </div>
                <div class="form-group col-md-6">
                  <label for="district">District</label>
                    <select id="district" name="district" class="form-control" required>
                    <option value="Ampara"  <?php if($province == 'Ampara'){echo "selected";} ?>>Ampara</option>
                    <option value="Anuradhapura"  <?php if($province == 'Anuradhapura'){echo "selected";} ?>>Anuradhapura</option>
                    <option value="Badulla"  <?php if($province == 'Badulla'){echo "selected";} ?>>Badulla</option>
                    <option value="Batticaloa"  <?php if($province == 'Batticaloa'){echo "selected";} ?>>Batticaloa</option>
                    <option value="Colombo"  <?php if($province == 'Colombo'){echo "selected";} ?>>Colombo</option>
                    <option value="Galle"  <?php if($province == 'Galle'){echo "selected";} ?>>Galle</option>
                    <option value="Gampaha"  <?php if($province == 'Gampaha'){echo "selected";} ?>>Gampaha</option>
                    <option value="Hambantota"  <?php if($province == 'Hambantota'){echo "selected";} ?>>Hambantota</option>
                    <option value="Jaffana"  <?php if($province == 'Jaffana'){echo "selected";} ?>>Jaffana</option>
                    <option value="Kalutara"  <?php if($province == 'Kalutara'){echo "selected";} ?>>Kalutara</option>
                    <option value="Kandy"  <?php if($province == 'Kanady'){echo "selected";} ?>>Kandy</option>
                    <option value="Kegalle"  <?php if($province == 'Kegalle'){echo "selected";} ?>>Kegalle</option>
                    <option value="Kilinochchi"  <?php if($province == 'Kilinochchi'){echo "selected";} ?>>Kilinochchi</option>
                    <option value="Kurunegala"  <?php if($province == 'Kurunegala'){echo "selected";} ?>>Kurunegala</option>
                    <option value="Manner"  <?php if($province == 'Manner'){echo "selected";} ?>>Manner </option>
                    <option value="Matale"  <?php if($province == 'Matale'){echo "selected";} ?>>Matale</option>
                    <option value="Matara"  <?php if($province == 'Matara'){echo "selected";} ?>>Matara</option>
                    <option value="Monaragala"  <?php if($province == 'Monaragala'){echo "selected";} ?>>Monaragala</option>
                    <option value="Mullaitivu"  <?php if($province == 'Mullaitivu'){echo "selected";} ?>>Mullaitivu</option>
                    <option value="Nuwara Eliya"  <?php if($province == 'Nuwara Eliya'){echo "selected";} ?>>Nuwara Eliya</option>
                    <option value="Polonnaruwa"  <?php if($province == 'Polonnaruwa'){echo "selected";} ?>>Polonnaruwa</option>
                    <option value="Puttalam"  <?php if($province == 'Puttalam'){echo "selected";} ?>>Puttalam</option>
                    <option value="Ratnapura"  <?php if($province == 'Ratnapura'){echo "selected";} ?>>Ratnapura</option>
                    <option value="Trincomalee"  <?php if($province == 'Trincomalee'){echo "selected";} ?>>Trincomalee</option>
                    <option value="Vavuniya"  <?php if($province == 'Vavuniya'){echo "selected";} ?>>Vavuniya</option>
                  </select>
              
                </div>
              </div>
             <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="division">Division</label>
                    <input type="text" name="division" class="form-control" id="division" placeholder="Enter Division" value="<?php echo $division; ?>" required>
                   
                    
                  </div>
                  <div class="form-group col-md-6">
                    <label for="residents">No of Residents</label>
                    <input type="text" name="residents" class="form-control" id="residents" value="<?php echo $residents; ?>" placeholder="" required>
    
                   
                  </div>
            </div>
            
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="vaccination_capacity">Vaccination Capacity</label>
                  <input type="text" name="vaccination_capacity" class="form-control" id="vaccination_capacity" value="<?php echo $vaccination_capacity; ?>" required>

                </div>
              </div>
             <div class="form-row col-sm" >
                 <div class="form-group col-md-2"><button type="submit" class="btn btn-primary float-right" name="update"  value="update">Update Center</button></div> 
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
</body>

</html>