<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class cntrl extends Controller
{
    public function pegawai(){
        $pegawai = DB::table('pegawai')->get();
        return view('tampil',['pegawai'=>$pegawai]);
    }

    public $data_user=[
        [
            "nim" => 672018073,
            "pw" => "qwer"
        ],
        [
            "nim" => 672018075,
            "pw" => "asdf"
        ]
        ];
        

    public function flogin(){
        $id=$_POST["id"];
        $pass=$_POST["pass"];

        for ($a=0; $a < count($this->data_user); $a++){
        if($this->data_user[$a]["nim"] == $id && $this->data_user[$a]["pw"] == $pass){
            return redirect('/pegawai');
        } else {
            return view('login');
        }
    }
}

    public function ftambah(Request $req){
        DB::table('pegawai')->insert(
            [
                'nama'=> $req->nama,
                'kode_pegawai'=> $req->kode_pegawai,
                'bagian'=> $req->bagian,
                'jabatan'=> $req->jabatan,
                'tempat_tinggal'=> $req->tempat_tinggal,
                'umur'=> $req->umur,
                'tanggal_masuk'=> $req->tanggal_masuk,
                'tanggal_keluar'=> $req->tanggal_keluar,
                'gaji'=> $req->gaji
            ]
        );
        return redirect('/pegawai');
    }

    public function tambah(){
        return view('tambah1');
    }

    public function delete($id){
        DB::table('pegawai')->where('id',$id)->delete();
        return redirect('/pegawai');
    }
    public function update($id){
        $hasil = DB::table('pegawai')->where('id',$id)->get();
        return view('edit',['hasil'=>$hasil]);
    }

    public function fedit(Request $req){
        DB::table('pegawai')->where('id',$req->id)->update(
            [
                'nama'=> $req->nama,
                'kode_pegawai'=> $req->kode_pegawai,
                'bagian'=> $req->bagian,
                'jabatan'=> $req->jabatan,
                'tempat_tinggal'=> $req->tempat_tinggal,
                'umur'=> $req->umur,
                'tanggal_masuk'=> $req->tanggal_masuk,
                'tanggal_keluar'=> $req->tanggal_keluar,
                'gaji'=> $req->gaji
            ]
        );
        return redirect('/pegawai');
    }
     public function daafn()
    {
        return view('tampilan');
    }

    public function daafn1()
    {
        return view('tampilan1');
    }

    public function daafn2()
    {
        return view('tampilan2');
    }
}
