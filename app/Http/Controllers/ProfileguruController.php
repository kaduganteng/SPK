<?php

namespace App\Http\Controllers;


use App\Models\Profileguru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;





class ProfileguruController extends Controller
{
   public function index()
   {

      $profileguru = Profileguru::get();
      return view('dataguru.profileguru', [
          'profileguru' => $profileguru
      ]);
   }
   public function create()
   {
      # code...
   }
   public function store(Request $request)
   {
      $foto_diri = $request->file('foto_diri');
      $nama_file = time() . "_" . $foto_diri->getClientOriginalExtension();
      $tujuan = 'upload/';
      $foto_diri->move($tujuan, $nama_file);
      $profileguru = Profileguru::create([
          'foto_diri' => $nama_file,
          'nama' => $request->nama,
          'tgl_lahir' => $request->tgl_lahir,
          'alamat' => $request->alamat,
          'nip'=>$request->nip,
          'status' => $request->status
      ]);
      Alert::success('Success Title', 'Success Message');
      return redirect()->back();
   }

   public function destroy($id)
   {
       $destroy = Profileguru::destroy($id);
       Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
       return redirect()->back();
   }

   public function edit(Request $request, $id)
   {
       if ($request->isMethod('post')) {
           $profileguru = Profileguru::findOrFail($id);
           $awal = $profileguru->foto_diri;
           $tujuan = 'upload/';
           $dt = [
            'foto_diri' => $awal,
               'nama' => $request['nama'],
               'tgl_lahir' => $request['tgl_lahir'],
               'alamat' => $request->alamat,
               'nip'=>$request->nip,
               'status' => $request['status']
           ];

           $request->foto_diri->move($tujuan, $awal);
           $profileguru->update($dt);
           
           return redirect()->route('profileguru');
       }
   }
}
