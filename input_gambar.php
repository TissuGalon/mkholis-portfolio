<?PHP


session_start();
include 'koneksi.php';


if (isset($_POST['simpan'])) {
	$id_portfolio = $_POST['id_portfolio'];
	$gambar = $_FILES['uploaded_file']['name'];
	$note = $_POST['note'];



	$kueri = mysqli_query($conn, "INSERT INTO gambar (id_portfolio,gambar,note) VALUES ('$id_portfolio','$gambar','$note')");

	echo "Data Terkirim!";

}







  if(!empty($_FILES['uploaded_file']))
  {
    $path = "assets/img/portfolio/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Gambar</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST">
	<h1>Input Gambar</h1>
	<label>Pilih ID Portfolio</label>
	<select name="id_portfolio" required="">
		<option value="">-</option>
<?php 
$qid = mysqli_query($conn, "SELECT * FROM portfolio");
while ($qd=mysqli_fetch_array($qid)) {
 ?>		
		<option value="<?php echo $qd['id']; ?>"><?php echo $qd['id']; ?>. <?php echo $qd['nama']; ?> (<?php echo $qd['jenis']; ?>)</option>
<?php } ?>		
	</select>
	<br>
	<p></p>
	<label>File</label>
	<input type="file" name="uploaded_file" required="">
	<br><p></p>
	<label>Note:</label>
	<input type="text" maxlength="300" value="-" name="note">
	<br><p></p>
	<input type="submit" name="simpan" value="simpan">
	<p></p>
	<p></p>
	<br>
	<br>
	<a href="input_portfolio.php">Input Portfolio</a>
</form>
</body>
</html>