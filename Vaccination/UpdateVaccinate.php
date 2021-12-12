<!DOCTYPE html>
<html>
<?php
include "config.php";

if(isset($_GET['id'])){
    $nic=$_GET['id'];
    //sql query
    $sqlString = "SELECT * FROM vaccinate_tbl WHERE nic='$nic';";

    //EXECUTE THE QUERY
    $result=$conn->query($sqlString);

    //retrieve data from database
    if($raw=$result->fetch_assoc()){
    $nic=$raw['nic'];
    $name=$raw['name'];
    $age=$raw['age'];
    $mobilenum=$raw['mobilenum'];
    $vaccinename=$raw['v_name'];
    $vaccinedose =$raw['v_dose'];
    $dosage =$raw['v_dosage'];
    $date =$raw['v_datetime'];
    $center = $raw['v_center'];
    $comments = $raw['comments'];
    //$datetime = new DateTime($date[0]->time_in);
    }

}

if(isset($_POST['update'])){
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

//sqk query

$sqlString="UPDATE vaccinate_tbl SET  name = '$name',age = '$age',mobilenum = '$mobilenum',v_name='$vaccinename',v_dose='$vaccinedose',v_dosage='$dosage',v_datetime='$date',v_center='$center',comments='$comments' where nic='$nic'";
$result=$conn->query($sqlString);

if($result==TRUE){
    echo "Record Updated";

    header ("location:ViewVaccinate.php");
}else{
    echo "Error".$sqlString."<br>".$conn->error;
}

}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Vaccination</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="Vac&Sched.css">
 
    

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
                <li >
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                          </svg>
                        Dashboard
                    </a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-syringe"></i>
                        Vaccination
                    </a>
                    
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="ViewVaccinate.php">View Vaccination</a>
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
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-hospital"></i>
                        Centers
                    </a>
                    <ul class="collapse list-unstyled1" id="pageSubmenu4">
                        <li>
                            <a href="Center.php">View Centers</a>
                        </li>
                        <li>
                            <a href="#">Add Center</a>
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
                    <li class="breadcrumb-item"><a href="#">Vaccination</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vaccinate</li>
                </ol>
            </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
    <!-- *****Create your content inside the below div**** -->
              <div>
              <div class="card-body">
               
                                <form class="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="nic">NIC</label>
                                                <input type="text" class="form-control" id="nic"  name="nic"  placeholder="nic" value="<?php echo $nic; ?>" readonly/>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name"  name="name"    placeholder="Last Name"  value="<?php echo  $name ?>"required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="text" class="form-control" id="age" name="age"  placeholder="Age" value="<?php echo  $age ?>" required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="mobilenum">Mobile Number</label>
                                                <input type="text" class="form-control" id="mobilenum" name="mobilenum"    placeholder="Mobile Number" value="<?php echo  $mobilenum ?>"required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="vname">Vaccine name</label>
                                                <select class="form-control" value="a" id="vname" name="vname" placeholder="Vaccine Name" value="<?php echo  $vaccinename ?>"required>
                                                    <option value="Moderna">Moderna</option>
                                                    <option value="Phizer">Phizer</option>
                                                    <option value="Sputnic V">Sputnic V</option>
                                                    <option value="Synopharm">Synopharm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="dosage">Vaccine Dosage / ml</label>
                                                <input type="text" class="form-control" id="dosage" name="dosage"  placeholder="Enter Dosage" value="<?php echo $dosage ?>"required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="dose">Dose</label>
                                                <input type="text" class="form-control" id="dose" name="dose"   placeholder="Enter Dose" value="<?php echo  $vaccinedose ?>"required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="center">Center</label>
                                                <input type="text" class="form-control" id="center" name="center"  placeholder="Enter Center" value="<?php echo $center  ?>"required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="datetime">Date and Time</label>
                                                <input type="datetime-local" class="form-control" id="datetime"   name="datetime"  value="<?php echo date('Y-m-d H:i:s', $row['Time']); ?>"required/>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-floating">
                                                <label for="comments">Comments</label>
                                                <textarea type="text" class="form-control" placeholder="Enter special notes" id="comments"  name="comments" style="height: 130px"  ><?php echo  $comments  ?> </textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" name="update"  value="update" ">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            </div>
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