<!DOCTYPE html>
<html>
<body>

<form method="post" action="form1.php">
  Nama Depan: <input type="text" name="namaDepan"><br/>
  Nama Belakang: <input type="text" name="namaBelakang">
  <input type="submit" name = "tombol">
</form>

<?php
if (isset ($_POST['tombol'])) {
    
    $nDepan = $_POST['namaDepan'];
    $nBelakang = $_POST['namaBelakang'];
    
        echo "Nama Depan : " .$nDepan;
        echo "<br>Nama Belakang : " .$nBelakang;
    
}
?>

</body>
</html>