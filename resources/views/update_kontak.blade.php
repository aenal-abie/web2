<form action ="{{url("kontak/update")}}/<?= $data->id ?>" method="post">
@csrf
Nama:
<input type="text" name="nama" value="<?= $data->nama; ?>"  />
<br/>
Email:
<input type="email" name="email" value="<?= $data->email; ?>"/>
<br/>
NO Hp:
<input type="text" name="no_hp" value="<?= $data->no_hp; ?>"/>
<br/>
Catatan:
<input type="text" name="catatan" value="<?= $data->catatan; ?>"/>
<input type="submit" value="Kirim" />
</form>
