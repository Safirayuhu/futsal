<?php
include "koneksi.php";
include "head.php";

if(isset($_POST['submit'])){
    $nama = $_POST['name'];
    $pass = $_POST['name'];
    $repass = $_POST['repassword'];
    
    if($pass == $repass){
        $q="INSERT INTO user (nama_user, password) VALUES ('$nama', '$pass')";
        $qry=mysql_query($q);

    }else{
        echo "password tidak sama";
    }

}

?>


<div class="col-md-6">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" class="form-control" id="exampleInputEmail1" placeholder="username" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Repassword</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="RePassword" name="repassword">
  </div>


  <input type="submit" class="btn btn-default" name="submit" value="Daftar">
</form>
</div>

    <!-- <div class="container">
        <form action="" method="post">
            Username
            <input type="text" name="name" id="">
            password
            <input type="password" name="password" id="">
            re-password
            <input type="password" name="repassword" id="">

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div> -->
<?php include "foot.php";?>


