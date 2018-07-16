<?php
 include "db.php";
 if(isset($_POST['update']))
 {
    $id=$_POST['id'];
    $kd_cus=$_POST['kd_cus'];
    $nm_cus=$_POST['nm_cus'];
    $alamat_cus=$_POST['alamat_cus'];
 $q=mysqli_query($con,"UPDATE `customer` SET `kd_cus`='$kd_cus',`nm_cus`='$nm_cus',`alamat_cus`='$alamat_cus' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>