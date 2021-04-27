<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel;
    }

    public function index()
    {
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        return view('siswa', $data);
    }

    public function detail($id_siswa)
    {
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
        ];
        return view('detailsiswa', $data);
    }

    public function add()
    {
        return view('addsiswa');
    }

    public function insert()
    {
        Request()->validate([
            'nis' => 'required|unique:tbl_siswa,nis|min:4|max:5',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jk' => 'required|max:1|alpha',
        ], [
            'nis.required' => 'NIP Wajib Diisi!',
            'nis.unique' => 'NIP Ini Sudah Ada!',
            'nis.min' => 'Minimal 4 Karakter!',
            'nis.max' => 'Maksimal 5 Karakter!',
            'nama_siswa.required' => 'Nama Wajib Diisi!',
            'kelas.required' => 'Mata Pelajaran Wajib Diisi!',
            'jk.required' => 'Jenis Kelamin Wajib Diisi!',
            'jk.max' => 'Maksimal 1 Karakter!',
            'jk.alpha' => 'Harus Alphabet Saja!',
        ]);

        $data = [
            'nis' => Request()->nis,
            'nama_siswa' => Request()->nama_siswa,
            'kelas' => Request()->kelas,
            'jk' => Request()->jk,
        ];

        $this->SiswaModel->addData($data);
        return redirect()->route('siswa')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id_siswa)
    {
        if (!$this->SiswaModel->detailData($id_siswa)) {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
        ];

        return view('editsiswa', $data);
    }

    public function update($id_siswa)
    {
        Request()->validate([
            'nis' => 'required|min:4|max:5',
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jk' => 'required|max:1|alpha',
        ], [
            'nis.required' => 'NIP Wajib Diisi!',
            'nis.unique' => 'NIP Ini Sudah Ada!',
            'nis.min' => 'Minimal 4 Karakter!',
            'nis.max' => 'Maksimal 5 Karakter!',
            'nama_siswa.required' => 'Nama Wajib Diisi!',
            'kelas.required' => 'Mata Pelajaran Wajib Diisi!',
            'jk.required' => 'Jenis Kelamin Wajib Diisi!',
            'jk.max' => 'Maksimal 1 Karakter!',
            'jk.alpha' => 'Harus Alphabet Saja!',
        ]);

        $data = [
            'nis' => Request()->nis,
            'nama_siswa' => Request()->nama_siswa,
            'kelas' => Request()->kelas,
            'jk' => Request()->jk,
        ];

        $this->SiswaModel->editData($id_siswa, $data);
        return redirect()->route('siswa')->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function delete($id_siswa)
    {
        $this->SiswaModel->deleteData($id_siswa);
        return redirect()->route('siswa')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
