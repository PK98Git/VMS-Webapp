<?php 

include "config.php";

$sql="SELECT COUNT('nic') AS totvac FROM vaccinate_tbl ;";

$result=$conn->query($sql);
$row=$result->fetch_assoc();


$sql1 = "SELECT COUNT('s.id') AS schedtot FROM schedule s;";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();

$sql2 = "SELECT SUM(st.avaCapacity) AS captot FROM stock st ;";
$result2=$conn->query($sql2);
$row2=$result2->fetch_assoc();
 
$sql3 = "SELECT COUNT(d.id)+COUNT(n.id) +COUNT(p.id) +COUNT(s.id) as c FROM doctors d , nurses n, phis p , system s  ;";
$result3=$conn->query($sql3);
$row3=$result3->fetch_assoc();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/Homepage.css">
    <link rel="stylesheet" href="dashboard.css">
    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- import navbar to all pages  -->
        <?php include "navbar.php" ?>

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
                  
                </ol>
              </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
           
    
    <!-- *****Create your content inside the below div**** -->
              <div>
                         <!--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/5.0.7/css/font-awesome.min.css" rel="stylesheet"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-blue order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Vaccinated people</h6>
                                    <h2 class="text-right"><i class="fas fa-users f-left"></i><span ><?php echo $row['totvac']; ?></span></h2>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-green order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Scheduled people </h6>
                                    <h2 class="text-right"><i class="fas fa-calendar-alt f-left"></i><span><?php echo $row1['schedtot']; ?></span></h2>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-yellow order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">available stock</h6>
                                    <h2 class="text-right"><i class="fas fa-cubes f-left"></i></i><span><?php echo $row2['captot']; ?></span></h2>      
                                </div>
                            </div>
                        </div>                   
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-pink order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Total Staff</h6>
                                    <h2 class="text-right"><i class="fas fa-user-md f-left"></i><span><?php echo $row3['c']; ?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
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
