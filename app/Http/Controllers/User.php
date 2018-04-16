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
   	$user = User::orderBy('id', 'desc')->get();
   	return view('user.index', compact('user'));
   }

   public function insert (Request $request) 
   {
   	// $user = new Santri;
   	// $user->nama = $request->nama;
   	// $user->alamat = $request->alamat;
   	// $user->tgl_lahir = $request->tgl_lahir;
   	// $user->jenis_kelamin = $request->jenis_kelamin;
   	// $user->save();

      User::create($request->all());

   	return redirect('user')->with('user', 'Data santri berhasil ditambahkan');
   }

   public function hapus($id)
   {
   	User::find($id)->delete();
   	return redirect('user')->with('Data santri berhasil di hapus');
   }

   public function create ()
   {
   	return view('user.create');
   }

   public function edit ($id)
   {
      $user = User::find($id);
      return view('user.edit', compact('user'));
   }
   public function update(Request $request)
   {
      $user = User::find($request->id);
      $user->nama = $request->nama;
      $user->alamat = $request->alamat;
      $user->tgl_lahir = $request->tgl_lahir;
      $user->jenis_kelamin = $request->jenis_kelamin;
      $user->save();

      return redirect('user')->with('user', 'Data berhasil dirubah');
   }
}
