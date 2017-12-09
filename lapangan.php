<?php
include "koneksi.php";
include "head.php";

$nama = $_SESSION['nama'];
if($nama==''){
    header('location:index.php');
}

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $lapangan = $_POST['lapangan'];
    $jammulai = $_POST['mulai'];
    $jamselesai = $_POST['selesai'];
    $date = date('Y-m-d');

    // if($jamselesai < $jammulai){
    //     echo "Jam selesai harus diatas jam mulai";
    // }elseif($jamselesai == $jammulai){
    //     echo "Jam selesai harus diatas jam mulai";
    // }else{

        // $qcek = "SELECT jam_mulai FROM booking WHERE date='$date'";
        // // echo $qcek;
        // $qrycek = mysql_query($qcek);
        // $cekdata = mysql_fetch_array($qrycek);

        // if($cekdata['jam_mulai'] == $jammulai){
        //     echo "<script>alert('Jam mulai sudah di booking')</script>";
        //     // header('location:lapangan.php');
        // }else{

            $q="INSERT INTO booking (username,lapangan,jam_mulai, jam_selesai,date)VALUES ('$nama','$lapangan','$jammulai', '$jamselesai','$date')";
            $qry=mysql_query($q);
            if($qry){
                echo "Anda berhasil membooking";
            }else{
                echo "Nda gagal membooking";
            }

        // }
    // }
}

?>
<div class="container">
<div class="col-md-6">
<form action="" method="post">
    Nama pemesan
    <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>" readonly>
    Pilih lapangan
    <select name="lapangan" class="form-control" id="">
        <option value="1">Lapangan 1</option>
        <option value="2">Lapangan 2</option>
    </select>
    Jam Mulai
    <select name="mulai" class="form-control" id="">
        <option value="8">08.00</option>
        <option value="9">09.00</option>
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
        <option value="8">08.00</option>
        <option value="9">09.00</option>
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

<div class="col-md-6">
    Jadwal Booking

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Lapangan</th>
            <th>JamMulai</th>
            <th>Jam Selesai</th>
        </tr>

    <?php
    $date = date('Y-m-d');
    $q="SELECT * FROM booking WHERE date='$date'";
    // echo $q;
    $qry = mysql_query($q);
    while ($row = mysql_fetch_array($qry)) { ?>
    <tr>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['lapangan'];?></td>
        <td><?php echo $row['jam_mulai'];?></td>
        <td><?php echo $row['jam_selesai'];?></td>
    </tr>
    <?php }

?>
</table>
</div>
</div>

<?php include "foot.php"; ?>