<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
# loginnya udah bisa kan 
# kalau udah sisa tambain ini 

use Illuminate\Support\Facades\Auth;
// ini class Auth atau authorizatidon 
# createnya pasangi middleware 
# jadi cuma user ygsudah login  baru bisa nambahin data 
class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all();
        // nilai di dalam barangs di masukkan pada view barang.index
        // sesuai fungsi dibawah ini 
        // jadi barangs di kenali pada blade dari barang.index
        return view('barang.index', compact('barangs'));


    }

    public function create(){
        $barangs = Barang::all();
        return view('barang.create', compact('barangs'));
    }

    public function store(){
        $this->middleware('auth');
        $user = Auth::user();

        Barang::create([
            'nama_barang'=>request('nama_barang'),
            'deskripsi'=>request('deskripsi'),
            'user_id'=>$user->id,
//'user_id'=>request('user_id'),
        ]);
        return redirect()->route('barang.index');            
    }

    public function edit($id){

        $barang = Barang::find($id);

        return view('barang.edit', compact('barang'));
    }

    public function update($id){

        $barang = Barang::find($id);

        $barang->update([
            'nama_barang'=>request('nama_barang'),
            'deskripsi'=>request('deskripsi'),
        ]);

        return redirect()->route('barang.index');
    }

    public function destroy($id){

        $barang = Barang::find($id);

        $barang->delete();
        
        return redirect()->route('barang.index');
    }
}
