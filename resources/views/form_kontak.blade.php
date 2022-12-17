<form action ="{{url("kontak/create")}}" method="post">
@csrf
Nama:
<input type="text" name="nama"/>
<br/>
Email:
<input type="email" name="email"/>
<br/>
NO Hp:
<input type="text" name="no_hp"/>
<br/>
Catatan:
<input type="text" name="catatan"/>
<input type="submit" value="Kirim" />
</form>
