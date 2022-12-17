@extends('layout.master')
@section('title')
Data Mahasiswa
@endsection
@section('content')
<?php
echo "<table border=1 class=\"table\">";
echo "<tr>
<td>NIM</td>
<td>Nama</td>
</tr>";
foreach($mahasiswa as $mhs) {
    echo "<tr>
    <td>$mhs[nim]</td>
    <td>$mhs[nama]</td>
    </tr>";
}
echo "</table>";

?>
@endsection
