<?php
include "koneksi.php";
include "head.php";
$idbooking = $_GET['id_booking'];

$q="SELECT * FROM booking WHERE id_booking='$idbooking'";
$qry=mysql_query($q);
while ($row=mysql_fetch_array($qry)) { ?>
<div class="container">
    <table class="table">
    <tr>
        <th>Nama</th>
        <th>Jam mulai</th>
        <th>Jam selesai</th>
        <th>Harga total</th>
        <th>Uang muka</th>
        <th>No Rekening</th>
    </tr>

    <tr>
        <td><?php echo $row['username']?></td>
        <td><?php echo $start = $row['jam_mulai']?></td>
        <td><?php echo $end = $row['jam_selesai']?></td>

        <?php
        $price = $end - $start;
        // echo $price;
        $harga = 150000*$price;
        $dp = $harga/2;
        ?>
        <td bgcolor="#00FF00"><?php echo $harga ?></td>
        <td><?php echo $dp ?></td>
        <td>12345678 an Futsal</td>
    </tr>
    </table>
</div>
<?php }

include "foot.php";
?>
