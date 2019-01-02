<?php
$Name = $_GET['name'];
$Price = $_GET['price'];
$Amount = $_GET['amont'];
if ($_GET['host'] == ""){ ?>
 <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>;
 <script type='text/javascript'>
swal({
  title: "Are you sure?",
  text: "คุณต้องการที่จะเข้าสู่หน้า Google หรือไม่?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("<?php if (isset()header("location: https://google.co.th");} ?>You Have Been Go To Google!!!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
 //swal('Hello','Hi','success');
 </script>
 <?php
}
?>