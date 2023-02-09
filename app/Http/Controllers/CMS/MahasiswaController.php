<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    //Tampilkan data (get semua data)

    public function index()
    {
        $mahasiswa = MahasiswaModel::all();
        return view('home')->with('mahasiswa', $mahasiswa);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_mahasiswa' => 'required',
                'nim' => 'required|numeric',
                'alamat' => 'required',
                'tanggal_masuk' => 'required'
            ],
            [
                'required' => 'data tidak boleh kosong'
            ]
        );

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            Alert::error('Gagal', $message);
            return redirect()->back();
        }
        try {
            $data = new MahasiswaModel;
            $data->nama_mahasiswa = $request->nama_mahasiswa;
            $data->nim = $request->nim;
            $data->alamat = $request->alamat;
            $data->tanggal_masuk = $request->tanggal_masuk;
            $data->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with('alert', 'Gagal');
        }

        if ($data) {
             Alert::success('Behasil', 'Admin berhasil ditambahkan ');
            return redirect('/');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }
}
