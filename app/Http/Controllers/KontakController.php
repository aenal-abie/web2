<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kontak;
use App\Models\Member;
use Illuminate\Http\Request;

class KontakController extends Controller {

    public function form()
    {
        $members = Member::all();
        return view("form_kontak", compact("members"));
    }

    public function index()
    {
        // echo "Ini halaman kontak";
        // // mengambil data dari tabel kontak model
        // $hasil = DB::select("select * from kontak");
        // print_r($hasil);
        // kirim ke view untuk ditampilkan
        // $kontak = new Kontak;
        // $hasil = $kontak->select();
        $data = Kontak::first();
        dd($data->artikel);
        // return view("kontak", ["hasil"=>$data]);

    }

    public function create(Request $request) {
        //dd($request);
        //echo $request->nama;
        //fungsi hitung NA
        //fungsi grade
        Kontak::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
            "catatan" => $request->catatan
        ]);


    }

    public function save(Request $request) {
        $harian = $request -> harian;
        $uts = $request -> uts;
        $uas = $request -> uas;
        $nilai_akhir = $this->hitungNilaiAkhir($harian, $uts, $uas);
        $grade  = $this->hitunggrade($nilai_akhir);
        Nilai::create([
            "nim" => $request->nama,
            "nama" => $request->email,
            "harian" => $request->no_hp,
            "uts" => $request->catatan,
            "uas" => $request->catatan,
            "nilai_akhir" => $request->catatan,
            "grade" => $request->catatan
        ]);


    }
    private function hitungNilaiAkhir($harian, $uts, $uas){
        return $harian*0.2 + $uts * 0.3 + $uas * 0.5;
    }

    private function hitunggrade($nilai_akhir) {
        if($nilai_akhir >= 76) return "A";
        if($nilai_akhir >= 71) return "B+";
        if($nilai_akhir >= 61) return "B";
        if($nilai_akhir >= 51) return "C+";
        if($nilai_akhir >= 0) return "C";
    }


    public function update($id){
        echo $id;
        $data = Kontak::where("id","=",$id)->first();
        // dd($data);
        return view("update_kontak", compact("data"));
    }

    public function updated(Request $req, $id){
        $data = Kontak::where("id","=",$id)->first();
        $data->nama = $req->nama;
        $data->email = $req->email;
        $data->no_hp = $req->no_hp;
        $data->catatan = $req->catatan;
        $data->save();
        dd($data);
    }

    public function delete($id){
        $data = Kontak::destroy($id);
    }

}
