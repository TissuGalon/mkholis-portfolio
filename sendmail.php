<?php

include('mailapi.php');
use Sendinblue\Mailin;
$api_key = file_get_contents('api_key.txt');

$from_email = $_POST['email'];
$from_name = $_POST['name'];

$to_email = 'parzivalxdd@gmail.com';
$to_name = 'Muhammad Kholis';
$subject = $_POST['subject'];
$message = '<h2>Heading 2</h2><p>Here goes the paragraph blah blah blah</p>';

$mailin = new Mailin('https://api.sendinblue.com/v2.0/',$api_key);
$data = array( 
  "to" => array($to_email=>$to_name),
  "from" => array($from_email,$from_name),
  "subject" => $subject,
  "html" => $message,
  "attachment" => array()
);

$response = $mailin->send_email($data);
if(isset($response['code']) && $response['code']=='success'){
  echo 'Email Sent';
}else{
  echo 'Email not sent';
}
exit;