@extends('layout.master')
@section('content')
<form action="{{url("mahasiswa/form_request")}}" method="post">
@csrf
<table>
    <tr>
        <td>
            <label>Nama</label>
        </td>
        <td>
            <input type="text" name="nama"/>
        </td>
    </tr>
    <tr>
        <td>
            <label>Alamat</label>
        </td>
        <td>
            <textarea name="alamat"></textarea>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <button type="submit">Proses</button>
        </td>
    </tr>
    </table>
</form>
@endsection


@section('title')
Form Mahasiswa
@endsection
