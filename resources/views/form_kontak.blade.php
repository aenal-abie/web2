<form action ="{{url("kontak/create")}}" method="post">
@csrf

Member:
<select name="member_id">
    @foreach ($members as  $member)
    <option value="{{$member->id}}">{{$member->nama}}</option>
    @endforeach
</select>
<br/>
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
