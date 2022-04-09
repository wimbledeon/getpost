<!DOCTYPE html>
<html>
<body>

<form method="get" action="form2.php">
  Nama Depan: <input type="text" name="namaDepan"><br/>
  Nama Belakang: <input type="text" name="namaBelakang">
  <input type="submit" name = "tombol">
</form>

<?php
if (isset ($_GET['tombol'])) {
    
    $nDepan = $_GET['namaDepan'];
    $nBelakang = $_GET['namaBelakang'];
    
        echo "Nama Depan : " .$nDepan;
        echo "<br>Nama Belakang : " .$nBelakang;
    
}
?>

</body>
</html>