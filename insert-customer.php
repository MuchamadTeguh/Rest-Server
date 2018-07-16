<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $kd_cus=$_POST['kd_cus'];
    $nm_cus=$_POST['nm_cus'];
    $alamat_cus=$_POST['alamat_cus'];
 $q=mysqli_query($con,"INSERT INTO `customer` (`id`,`kd_cus`,`nm_cus`,`alamat_cus`) VALUES ('$id','$kd_cus','$nm_cus','$alamat_cus')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>