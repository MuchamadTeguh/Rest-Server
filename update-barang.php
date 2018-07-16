<?php
 include "db.php";
 if(isset($_POST['update']))
 {$id=$_POST['id'];
 $kd_brg=$_POST['kd_brg'];
 $nm_brg=$_POST['nm_brg'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `barang` SET `kd_brg`='$kd_brg',`nm_brg`='$nm_brg',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>