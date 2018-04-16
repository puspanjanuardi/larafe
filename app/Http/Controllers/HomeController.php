<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use App\Santri;
use App\User;
class HomeController extends Controller
{
   public function index($id) 
   {
   	return 'Helo'.$id;
   }
   public function view() 
   {
   	$warga = Warga::whereIN('nama',['farid,muarram'])->get();
   	return view('welcome', compact('warga'));
   }
   	// $warga = Warga::where('id', '1', '2')->get();
   public function listSantri() 
   {
   	$santri = santri::orderBy('id', 'desc')->get();
   	return view('santri.index', compact('santri'));
   }

   public function insert (Request $request) 
   {
   	// $santri = new Santri;
   	// $santri->nama = $request->nama;
   	// $santri->alamat = $request->alamat;
   	// $santri->tgl_lahir = $request->tgl_lahir;
   	// $santri->jenis_kelamin = $request->jenis_kelamin;
   	// $santri->save();

      Santri::create($request->all());

   	return redirect('santri')->with('santri', 'Data santri berhasil ditambahkan');
   }

   public function hapus($id)
   {
   	Santri::find($id)->delete();
   	return redirect('santri')->with('Data santri berhasil di hapus');
   }

   public function create ()
   {
   	return view('santri.create');
   }

   public function edit ($id)
   {
      $santri = Santri::find($id);
      return view('santri.edit', compact('santri'));
   }
   public function update(Request $request)
   {
      $santri = Santri::find($request->id);
      $santri->nama = $request->nama;
      $santri->alamat = $request->alamat;
      $santri->tgl_lahir = $request->tgl_lahir;
      $santri->jenis_kelamin = $request->jenis_kelamin;
      $santri->save();

      return redirect('santri')->with('santri', 'Data berhasil dirubah');
   }
}
