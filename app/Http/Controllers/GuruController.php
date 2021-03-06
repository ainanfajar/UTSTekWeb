<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }

    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];
        return view('guru', $data);
    }

    public function detail($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('detailguru', $data);
    }

    public function add()
    {
        return view('addguru');
    }

    public function insert()
    {
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
        ], [
            'nip.required' => 'NIP Wajib Diisi!',
            'nip.unique' => 'NIP Ini Sudah Ada!',
            'nip.min' => 'Minimal 4 Karakter!',
            'nip.max' => 'Maksimal 5 Karakter!',
            'nama_guru.required' => 'Nama Wajib Diisi!',
            'mapel.required' => 'Mata Pelajaran Wajib Diisi!',
        ]);

        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
        ];

        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_guru)
    {
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];

        return view('editguru', $data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip' => 'required|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
        ], [
            'nip.required' => 'NIP Wajib Diisi!',
            'nip.unique' => 'NIP Ini Sudah Ada!',
            'nip.min' => 'Minimal 4 Karakter!',
            'nip.max' => 'Maksimal 5 Karakter!',
            'nama_guru.required' => 'Nama Wajib Diisi!',
            'mapel.required' => 'Mata Pelajaran Wajib Diisi!',
        ]);

        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
        ];

        $this->GuruModel->editData($id_guru, $data);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function delete($id_guru)
    {
        $this->GuruModel->deleteData($id_guru);
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
