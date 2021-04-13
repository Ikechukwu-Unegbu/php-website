<?php

require "../config/config.php";
require "../lib/Database.php";
require "../model/User.php";
require "../helpers/url_redirect.php";
require "../helpers/session_helpers.php";


function update_img(){
  if(isset($_POST['img_submit'])){
    $user_id = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
    $filename = $_FILES['file']['name'];
    $filesize = $_FILES['file']['size'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $user = new User();
    $theUser = $user->getUserById($user_id);
    $valid_ext = ['png', 'jpeg', 'jpg'];

    $uploadPath = ROOT_PATH."img/users".$filename;
    $file_extension = pathinfo($uploadPath, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    if($filesize>3000000){
      if(in_array($file_extension, $valid_ext)){

        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        if($didUpload){
          echo "we have successfully transfered image";
        }
      }
    }
  }
}

?>