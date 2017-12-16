<?php
include "koneksi.php";
// include "head.php";
$idbooking = $_GET['id_booking'];

$q="SELECT * FROM booking WHERE id_booking='$idbooking'";
$qry=mysql_query($q);
?>

<center><h1>Futsal King</h1></center>
<center>---------------------------------------
<table border="1">
    <?php
    while ($row=mysql_fetch_array($qry)) { ?>
    <tr>
        <th>Nama</th>
        <td><?php echo $row['username']?></td>
    </tr>
    <tr>
        <th>Lapangan</th>
        <td><?php echo $row['lapangan']?></td>
    </tr>
    <tr>
        <th>Jam mulai</th>
        <td><?php echo $start = $row['jam_mulai']?></td>
    </tr>
    <tr>
        <th>Jam selesai</th>
        <td><?php echo $end = $row['jam_selesai']?></td>
    </tr>
    <tr>
        <th>Tgl</th>
        <td><?php echo $row['date']?></td>
    </tr>
    
    <?php } ?>
</table>
<br>
Total Bayar : <?php echo "Rp ".$total=($end-$start)*150000 ?>
<br><br>
Uang Muka : <?php echo "Rp ".$total/2 ?>
<br><br>
Silahkan, melakukan transfer ke No rek <b>0700001911910</b> atas nama Futsal King
<br>
<button onclick="myFunction()">Cetak</button>
<script>
function myFunction() {
    window.print();
}
</script>
<center>

<?php
include "foot.php";
?>
