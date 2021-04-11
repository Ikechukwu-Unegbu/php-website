<?php 

require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../helpers/url_redirect.php";
require "../helpers/session_helper.php";

function logout(){
  unset($_SESSION['user_id']);
  unset($_SESSION['user_email']);
  unset($_SESSION['user_name']);
  session_destroy();
  redirect('index.php');
}

logout();