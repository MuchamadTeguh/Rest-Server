<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $kd_pgw=$_POST['kd_pgw'];
 $nm_pgw=$_POST['nm_pgw'];
 $bagian=$_POST['bagian'];
 $q=mysqli_query($con,"INSERT INTO `pegawai` (`id`,`kd_pgw`,`nm_pgw`,`bagian`) VALUES ('$id','$kd_pgw','$nm_pgw','$bagian')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>