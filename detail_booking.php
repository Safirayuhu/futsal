<?php
include "koneksi.php";
$idbooking = $_GET['id_booking'];

$q="SELECT * FROM booking WHERE id_booking='$idbooking'";
$qry=mysql_query($q);
while ($row=mysql_fetch_array($qry)) { ?>

    <table>
    <tr>
        <td>Nama</td>
        <td><?php echo $row['username']?></td>
    </tr>

    <tr>
        <td>Jam mulai</td>
        <td><?php echo $start = $row['jam_mulai']?></td>
    </tr>

    <tr>
        <td>Jam selesai</td>
        <td><?php echo $end = $row['jam_selesai']?></td>
    </tr>
    <?php
    $price = $end - $start;
    // echo $price;
    $harga = 150000*$price;
    $dp = $harga/2;
    ?>

    <tr>
        <td>Harga total</td>
        <td><?php echo $harga ?></td>
    </tr>

    <tr>
        <td>Uang muka</td>
        <td><?php echo $dp ?></td>
    </tr>

    <tr>
        <td>No Rekening</td>
        <td>12345678 an Futsal</td>
    </tr>
    </table>

<?php } ?>