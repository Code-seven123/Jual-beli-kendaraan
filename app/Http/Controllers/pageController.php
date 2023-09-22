<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    public function home(){
        $motor = DB::table('jualbelis')->get();
        return view('home', [
            'title' => 'home',
            'datas' => $motor
        ]);
    }
    
    public function tambah(Request $req){
        DB::table('jualbelis')->insert([
            'merkMotor' => $req->merk,
            'namaMotor' => $req->nama,
            'warna' => $req->warna,
            'harga' => $req->harga
        ]);
        return redirect('/');
    }
    
    public function hapus($id){
      DB::table('jualbelis')->where('kdMotor', $id)->delete();
      
      return redirect('/');
      
    }
    
    public function edit($id){
      $motor = DB::table('jualbelis')->where('kdMotor', $id)->get();
      
      return view('update', [
          'data' => $motor,
          'title' => 'update'
      ]);
      
    }
    
    public function update(Request $req){
        DB::table('jualbelis')->where('kdMotor', $req->kd )->update([
            'merkMotor' => $req->merk,
            'namaMotor' => $req->nama,
            'warna' => $req->warna,
            'harga' => $req->harga,
        ]);
        
        return redirect('/');
    }
}
