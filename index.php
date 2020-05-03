<?php
$nim = $url = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nim = $_POST['nim'];
    $url = "https://akademik.polban.ac.id/fotomhsrekap/$nim.jpg";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencari Foto Berjaster Mahasiswa POLBAN</title>
</head>
<body align="center">
<h1>Pencari Foto Berjaster Mahasiswa POLBAN</h1>
<br>
<br>
<br>
<?php
if($url == ""){
    echo "";
}
else{

?>
<img width="150" height="200" title="foto mahasiswa dengan nim <?php echo $nim ?>" src="<?php echo $url; ?>">
<?php
}
?>

<br><br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    NIM: <input type="text" name="nim" id="nim" value="<?php echo $nim; ?>">
    <input type="submit" name="find" id="find" value="Cari">
</form>


</body>
</html>
