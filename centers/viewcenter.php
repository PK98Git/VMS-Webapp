<?php 
include "config.php";

include "config.php";

     $sql="SELECT * FROM center;";

    $result=$conn->query($sql);

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
                  <li class="breadcrumb-item active" aria-current="page">View center</li>
                </ol>
              </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
           
    
    <!-- *****Create your content inside the below div**** -->
              <div>
            
              
                    <a class="btn btn-primary" style = "float:right" href="center.php">Add New center</a>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>Center ID</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Division</th>
                                <th>No of residents</th>
                                <th>Vaccination capacity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    while($row=$result->fetch_assoc()){
                                 ?>
                                    <tr>
                                        <td><?php echo $row['center_id']; ?></td>
                                        <td><?php echo $row['province']; ?></td>
                                        <td><?php echo $row['district'] ?></td>
                                        <td><?php echo $row['division'] ?></td>
                                        <td><?php echo $row['residents'] ?></td>
                                        <td><?php echo $row['vaccination_capacity'] ?></td>
                                        <td>
                                            
                                                <a class="btn btn-info" href="updatecenter.php ?id=<?php echo $row['center_id']; ?>"  >Edit</a>&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="deletecenter.php ?id=<?php echo $row['center_id']; ?>">Delete</a>
                                            
                                            
                                        </td>
                                    </tr>
                                <?php
                        
                                        }
                
                                ?>
                                        
                            </tbody>
        
                    </table>  
                    
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