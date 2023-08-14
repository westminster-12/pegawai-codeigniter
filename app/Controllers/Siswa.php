<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function index()
    {

        $siswa=$this->siswaModel->findAll();

        $data=[
            'title' => 'Daftar Siswa',
            'siswa' => $this->siswaModel->getSiswa()
        ];
        
        return view('siswa/table-siswa', $data);
    }
    public function edit($id_siswa)
    {
        $siswa=$this->siswaModel->getSiswa($id_siswa);
        $data=['siswa' => $siswa];
        return view('siswa/edit', $data);
    }
    public function update($id_siswa)
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_siswa' => $this->request->getVar('nama_siswa'),
                'nisn' => $this->request->getVar('nisn'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat')
            ];

            // Handle file upload for foto
            $foto = $this->request->getFile('foto');
            if ($foto && $foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move('./img', $newName);
                $data['foto'] = $newName;
            }

            $this->siswaModel->updateSiswa($id_siswa, $data);

            return redirect()->to('/siswa'); // Redirect back to the list of students
        }

        $siswa = $this->siswaModel->getSiswa($id_siswa);
        $data = ['siswa' => $siswa];
        return view('siswa/edit', $data);
    }

    public function add()
    {
        return view('siswa/add');
    }

    public function insert()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_siswa' => $this->request->getVar('nama_siswa'),
                'nisn' => $this->request->getVar('nisn'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat')
            ];

            // Handle file upload for foto
            $foto = $this->request->getFile('foto');
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move('./img', $newName);
                $data['foto'] = $newName;
            }

            $this->siswaModel->addSiswa($data);

            return redirect()->to('/siswa/'); // Redirect back to the list of students
        }

        return view('siswa/');
    }

    public function delete($id_siswa){
        $this->siswaModel->deleteSiswa($id_siswa);
        return redirect()->to('/siswa');
    }


}
