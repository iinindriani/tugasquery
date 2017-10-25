<?php
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'dbstbi';  
    
  $konek_db = mysqli_connect($host, $user, $password);    
  $find_db = mysqli_select_db($database) ;

$query = "DELETE FROM `dokumen` WHERE 1";
 
$hasil = mysqli_query ($query);
 
echo "Data telah dihapus.";
?>
<br>
<a> Kembali ke tabel ? </a> <a href="tokenisasi.php"> YA </a>