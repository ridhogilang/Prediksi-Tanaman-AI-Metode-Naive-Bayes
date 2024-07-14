<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\DataTesting;
use App\Models\DataTraining;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function datatraining()
    {
        return view('admin.datatraining', [
            "title" => "Data Training",
            "data" => DataTraining::all()
        ]); 
    }

    public function datatesting()
    {
        return view('admin.datatesting', [
            "title" => "Data Testing",
            "data" => DataTesting::all()
        ]); 
    }

    public function adddata(Request $request)
    {
        $validatedData = $request->validate([
            'oksigen' => 'required|numeric',
            'tekstur' => 'required|numeric',
            'kelembapan' => 'required|numeric',
            'suhu' => 'required|numeric',
            'keasaman' => 'required|numeric',
            'tanaman' => 'required|string',
        ]);

        // Membuat instance model DataTraining
        $dataTraining = new DataTraining();

        // Mengisi atribut model dengan data dari form
        $dataTraining->oksigen = $validatedData['oksigen'];
        $dataTraining->tekstur = $validatedData['tekstur'];
        $dataTraining->kelembapan = $validatedData['kelembapan'];
        $dataTraining->suhu = $validatedData['suhu'];
        $dataTraining->keasaman = $validatedData['keasaman'];
        $dataTraining->tanaman = $validatedData['tanaman'];

        $dataTraining->save();

        // Redirect ke halaman yang sesuai atau berikan respons yang sesuai
        return redirect()->back()->with('status', 'success')->with('message', 'Data Training Berhasil di Tambah');
    }

    public function deletedata($id)
    {
        $data = DataTraining::find($id);

        DataTraining::destroy($data->id);
        return redirect()->back()->with('status', 'success')->with('message', 'Data Training Berhasil di Hapus');
    }

    public function registrasiadmin()
    {
        return view('admin.registrasi', [
            "title" => "Registrasi",
            "role" => Role::all()
        ]); 
    }
}
