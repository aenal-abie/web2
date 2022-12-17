<?php

$data = [
    ["1","Mangga",15000, 3],
    ["2","Jeruk",13000, 5],
    ["3","Manggis",20000, 4],
];

function hitung($harga_satuan, $jumlah) {
    return $harga_satuan * $jumlah;
}
?>
<table>
<tr>
    <td>No</td>
    <td>Nama Buah</td>
    <td>Harga Satuan</td>
    <td>Jumlah (Kg)</td>
    <td>Subtotal</td>
</tr>
<?php
$total = 0;

foreach($data as $isi){ ?>
    <tr>
        <td><?php echo $isi[0] ?></td>
        <td><?php echo $isi[1] ?></td>
        <td><?php echo $isi[2] ?></td>
        <td><?php echo $isi[3] ?></td>
        <td>
            <?php
                echo $subtotal = hitung($isi[2],  $isi[3]);
                $total = $total + $subtotal;
            ?>
        </td>
    </tr>
<?php } ?>

<tr>
    <td></td>
    <td>Total Bayar</td>
    <td></td>
    <td></td>
    <td><?php echo $total; ?></td>
</tr>

</table>
