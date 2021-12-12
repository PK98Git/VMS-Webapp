<!DOCTYPE html>
<html>
<?php 
include "../config.php";

$sql="SELECT * FROM schedule;";

$result=$conn->query($sql);

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>View Schedule</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="Vac&Sched.css">
 
    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

    </script>
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
                    <li class="breadcrumb-item"><a href="#">View schedule</a></li>
                </ol>
            </nav>

<!-- link for breadcrumb editing - https://getbootstrap.com/docs/5.1/components/breadcrumb// -->
    <!-- *****Create your content inside the below div**** -->
              <div>
              <div class="card-body">
              <a  class="btn btn-primary mb-3" href="addSchedule.php">add New schedule</a>
        <table class="table table-bordered">
       <thead>
        <tr>
            <th scope="col">NIC</th>
            <th scope="col">Name </th>
            <th scope="col">Birth date</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">vaccine Name</th>
            <th scope="col">Vaccine Dose</th>
            <th scope="col">Vaccine Center</th>
            <th scope="col">Vaccine Datetime</th>
        </tr>
        </thead>
        
        <tbody>
            <?php
            //row =firstrow
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['nic']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['mobilenum'] ?></td>
                    <td><?php echo $row['s_name'] ?></td>
                    <td><?php echo $row['s_dose'] ?></td>
                    <td><?php echo $row['s_center'] ?></td>
                    <td><?php echo $row['s_datetime'] ?></td>
                </tr>
            <?php
            }
            ?>            
        </tbody>
        
    </table>  

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

<script>
    /*
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
     Read more about handling dismissals below 
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
*/
    </script>
