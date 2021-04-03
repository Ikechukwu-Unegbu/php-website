<?php 

require "../config/config.php";
require "../Models/User.php";
require "../lib/Database.php";
require "../helpers/url_redirect.php";
require "../helpers/session_helper.php";

$user = new User();

$user_email = filter_var($_POST['email_check'], FILTER_SANITIZE_EMAIL);

$result = $user->check_email($user_email);

if($result){
  echo json_encode(array('response'=>'email_success', 'message'=>$result->user_email));
  // echo "The user email exists and is:".$result->user_email;
}
else{
  // echo "No records for this email";
  echo json_encode(array('response'=>'email_fail', 'message'=>'There is no record'));
}