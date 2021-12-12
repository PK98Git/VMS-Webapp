<?php
include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
	print_r($id);


    $sqlquery = " DELETE FROM vaccinate_tbl WHERE nic='$id';";

    $result=$conn->query($sqlquery);

    if($result==TRUE){
        
        echo "Record Deleted Successfully ";
        //header ("location:view.php");
        header ("location:viewvaccinate.php");
       
    }else{
        echo "Error".$sqlquery."<br>".$conn->error;
    }
}
?>

<script>
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
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
    </script>