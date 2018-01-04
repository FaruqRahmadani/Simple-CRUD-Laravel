<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;

use Crypt;
use App\Jurusan;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function Index()
    {
      $Mahasiswa = Mahasiswa::all();

      return view('Mahasiswa.Index', ['Mahasiswa' => $Mahasiswa]);
    }

    public function AddData()
    {
      $Jurusan = Jurusan::all();

      return view('Mahasiswa.AddData', ['Jurusan' => $Jurusan]);
    }

    public function storeAddData(Request $request)
    {
      $Mahasiswa = new Mahasiswa;
      $Mahasiswa->NPM        = $request->NPM;
      $Mahasiswa->Nama       = $request->Nama;
      $Mahasiswa->jurusan_id = $request->Jurusan;
      $Mahasiswa->Status     = $request->Status;
      if ($request->Foto != null) {
        $FotoExt = $request->Foto->getClientOriginalExtension();
        $FotoName = Crypt::encryptString($request->NPM).'.'.$FotoExt;
        $request->Foto->move(public_path('/img/user'), $FotoName);
        $Mahasiswa->foto = $FotoName;
      }

      $Mahasiswa->save();
      return redirect('/');
    }

    public function EditData($id)
    {
      try {
        $idz = Crypt::decryptString($id);
      } catch (DecryptException $e) {
        abort('404');
      }

      $Jurusan = Jurusan::all();
      $Mahasiswa = Mahasiswa::find($idz);

      return view('Mahasiswa.EditData', ['Jurusan' => $Jurusan, 'Mahasiswa' => $Mahasiswa]);
    }

    public function storeEditData(Request $request, $id)
    {
      try {
        $idz = Crypt::decryptString($id);
      } catch (DecryptException $e) {
        abort('404');
      }

      $Mahasiswa = Mahasiswa::find($idz);

      $Mahasiswa->NPM        = $request->NPM;
      $Mahasiswa->Nama       = $request->Nama;
      $Mahasiswa->jurusan_id = $request->Jurusan;
      $Mahasiswa->Status     = $request->Status;
      if ($request->Foto != null) {
        $FotoExt = $request->Foto->getClientOriginalExtension();
        $FotoName = Crypt::encryptString($request->NPM).'.'.$FotoExt;
        $request->Foto->move(public_path('/img/user'), $FotoName);
        $Mahasiswa->foto = $FotoName;
      }

      $Mahasiswa->save();
      return redirect('/');
    }

    public function DeleteData($id)
    {
      try {
        $idz = Crypt::decryptString($id);
      } catch (DecryptException $e) {
        abort('404');
      }

      $Mahasiswa = Mahasiswa::find($idz);
      $Mahasiswa->delete();

      return redirect('/');
    }
}
