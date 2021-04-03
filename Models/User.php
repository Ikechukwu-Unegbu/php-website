<?php 
class User{
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function register($data){
    $this->db->query('INSERT INTO users (user_name, user_email, user_password, user_role) 
    VALUES(:user_name, :user_email, :user_password, :user_role)');

    $this->db->bind(':user_name', $data['user_name']);
    $this->db->bind(':user_email', $data['user_email']);
    $this->db->bind(':user_password', $data['user_password']);
    $this->db->bind(':user_role', $data['user_role']);

    if($this->db->execute()){
      return true;
    }else{
      return false;
    }
    //return $this->db->execute() ? true: false; 
  }

  public function check_email($user_email){
    $this->db->query('SELECT user_email FROM users WHERE user_email = :user_email');

    $this->db->bind(':user_email', $user_email);
    $row = $this->db->single();
    return $row;
  }
}