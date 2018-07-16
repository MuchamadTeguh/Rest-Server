<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $kd_brg=$_POST['kd_brg'];
    $nm_brg=$_POST['nm_brg'];
    $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`id`,`kd_brg`,`nm_brg`,`harga`) VALUES ('$id','$kd_brg','$nm_brg','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>