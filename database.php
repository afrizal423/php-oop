<?php
  class database{
    protected $hosts="localhost";
    protected $user="root";
    protected $password="";
    protected $db="oop";


    function __construct(){
      $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
      if(mysqli_connect_errno()) {
      echo "Gak iso konek!";
      exit;
      }
    }
  }


 ?>
