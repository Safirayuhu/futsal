<?php
include "koneksi.php";
include "head.php";

if(isset($_POST['submit'])){
    $jammulai = $_POST['mulai'];
    $jamselesai = $_POST['selesai'];

    $q="INSERT INTO booking (jam_mulai, jam_selesai)VALUES ('$jammulai', '$jamselesai')";
    $qry=mysql_query($q);
    if($qry){
        echo "Data disimpan";
    }else{
        echo "Data gagal disimpan";
    }
}

?>
<div class="col-md-6">
<form action="" method="post">
    Jam Mulai
    <select name="mulai" class="form-control" id="">
        <option value="08">08.00</option>
        <option value="09">09.00</option>
        <option value="10">10.00</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
    </select>

    Jam Selesai
    <select name="selesai" class="form-control" id="">
        <option value="08">08.00</option>
        <option value="09">09.00</option>
        <option value="10">10.00</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
    </select>
    <!-- <br>
    <input type="checkbox" name="jam" id="">08.00<br>
    <input type="checkbox" name="jam" id="">09.00<br>
    <input type="checkbox" name="jam" id="">10.00<br>

    <input type="checkbox" name="jam" id="">11.00<br>
    <input type="checkbox" name="jam" id="">12.00<br>
    <input type="checkbox" name="jam" id="">13.00<br>

    <input type="checkbox" name="jam" id="">14.00<br>
    <input type="checkbox" name="jam" id="">15.00<br>
    <input type="checkbox" name="jam" id="">16.00<br>

    <input type="checkbox" name="jam" id="">17.00<br>
    <input type="checkbox" name="jam" id="">18.00<br>
    <input type="checkbox" name="jam" id="">19.00<br>

    <input type="checkbox" name="jam" id="">20.00<br>
    <input type="checkbox" name="jam" id="">21.00<br>
    <input type="checkbox" name="jam" id="">22.00<br>

    <input type="checkbox" name="jam" id="">23.00<br>
    <input type="checkbox" name="jam" id="">24.00<br> -->
<input type="submit" name="submit" value="Booking">
</form>
</div>

<?php include "foot.php"; ?>