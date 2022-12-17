<html>
    <table border =1>
        <tr>
            <td>Nama</td>
            <td>Email</td>
            <td>No HP</td>
            <td>Catatan</td>
            <td>Aksi</td>
        </tr>


        <?php foreach($hasil as $value) { ?>
            <tr>
                <td><?php echo $value->nama ?></td>
                <td><?= $value->email ?></td>
                <td><?= $value->no_hp ?></td>
                <td><?= $value->catatan?></td>
                <td><a href="{{url("kontak/update/")}}/<?= $value->id ?>">Ubah</a>
                | <a  href="{{url("kontak/delete/")}}/<?= $value->id ?>">Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
</html
