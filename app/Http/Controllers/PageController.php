<?php
namespace App\Http\Controllers;

class PageController extends Controller {
    public function index(){
        return view("welcome");
    }

    public function helo(){
        echo "Hello";
    }

    public function mhs(){
        $mahasiswa = [["nama"=>"Andi", "nim"=>"09"],
            ["nama"=>"Ali", "nim"=>"11"],
            ["nama"=>"Ika", "nim"=>"10"]];
        return view("mahasiswa", compact("mahasiswa"));
    }
}
