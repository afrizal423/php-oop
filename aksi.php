<?php
include 'database.php';
class aksi extends database{
  function tampil_data(){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
    $query=mysqli_query($mysqli,"SELECT * FROM user");
    //$data=$mysqli->query($mysqli,$query);
    while($d = mysqli_fetch_array($query)){
      $hasil[] = $d;
    }
    return $hasil;
  }

  function input($nama,$alamat,$usia){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
    $hasil=mysqli_query($mysqli,"insert into user values('','$nama','$alamat','$usia')");
    if ($hasil){
      echo "Sukses wes nyimpan data <br />
       <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
      } else {
        echo "Onok kesalahan";
      }

      $mysqli->close();
  }

  function hapus($id){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
     mysqli_query($mysqli,"delete from user where id='$id'");
  }
  function cari($nama){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
     $data = mysqli_query($mysqli,"select * from user where nama like '$nama'");
      while($d = mysqli_fetch_array($data)){
          $hasil[] = $d;
      }
   return $hasil;
  }
  function update($id,$nama,$alamat,$usia){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
     mysqli_query($mysqli,"update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
  }
  function edit($id){
    $mysqli=mysqli_connect("$this->hosts","$this->user","$this->password","$this->db");
     $data = mysqli_query($mysqli,"select * from user where id='$id'");
      while($d = mysqli_fetch_array($data)){
          $hasil[] = $d;
      }
   return $hasil;
  }

}
 ?>
