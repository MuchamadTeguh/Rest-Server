<?php
 include "db.php";
 if(isset($_POST['update']))
 {$id=$_POST['id'];
 $kd_pgw=$_POST['kd_pgw'];
 $nm_pgw=$_POST['nm_pgw'];
 $bagian=$_POST['bagian'];
 $q=mysqli_query($con,"UPDATE `pegawai` SET `kd_pgw`='$kd_pgw',`nm_pgw`='$nm_pgw',`bagian`='$bagian' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>