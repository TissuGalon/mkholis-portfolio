<?php 
session_start();
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$date = date("D-M-Y");
$minutes = time();
$time = $date && $minutes;

$kueri = mysqli_query($conn, "INSERT INTO pesan (name,email,subject,message,waktu) VALUES ('$name','$email','$subject','$message','$time')");

echo "Mail Sent Succesfully! Ignore the error message";

 ?>