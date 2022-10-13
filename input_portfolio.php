<?PHP


session_start();
include 'koneksi.php';


if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$gambar = $_FILES['uploaded_file']['name'];
	$client = $_POST['client'];
	$date = $_POST['date'];
	$url = $_POST['url'];
	$detail = $_POST['detail'];



	$kueri = mysqli_query($conn, "INSERT INTO portfolio (nama,jenis,gambar,category,client,date,url,detail) VALUES ('$nama','$jenis','$gambar','$jenis','$client','$date','$url','$detail')");

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
	<title>Add</title>
</head>
<body>
	<form action="" enctype="multipart/form-data"  method="POST">
		<a href="input_gambar.php">Input gambar</a>
		<h1>Input</h1>
		<label>Nama Project</label>
		<input type="text" maxlength="200" name="nama" required="">
		<p></p>



		<label>Jenis Project</label>
		<select name="jenis" required="">
			<option value="web">web</option>
			<option value="app">app</option>
			<option value="design">design</option>
			<option value="photoshop">photoshop</option>
		</select>
		<p></p>
		<label>Gambar</label>
		<input type="file" name="uploaded_file" required="">
		<p></p>


		<label>Client</label>
		<input type="text" maxlength="200" name="client" required="">
		<p></p>
		<label>Date</label>
		<input type="text" maxlength="100" name="date" placeholder="19 July 2022" required="">
		<p></p>
		<label>URL</label>
		<input type="text" maxlength="500" value="#" name="url" required="">
		<p></p>
		<label>Detail</label>
		<textarea name="detail" required=""></textarea>
		<p></p>
		<input type="submit" name="simpan">



	</form>
	<p>
		<a href="index.php">Kembali</a>
	</p>
</body>
</html>