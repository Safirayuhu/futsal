<?php
include "koneksi.php";
include "head.php";

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $q="SELECT * FROM user WHERE nama_user='$name' AND password='$password'";

    $qry=mysql_query($q);
    $cek = mysql_num_rows($qry);
    if($cek >0){
        header('Location: lapangan.php');
    }else{
        echo "gak ada";
    }
}

?>

<div class="col-md-6">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" class="form-control" id="exampleInputEmail1" placeholder="username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <input type="submit" class="btn btn-default" name="submit" value="Masuk">
</form>
</div>

<!-- <form action="" method="post">
Username
<input type="text" name="username" id="">
password
<input type="password" name="password" id="">
<input type="submit" name="submit" value="Login">
</form> -->

<?php  include "foot.php"; ?>