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
        // $db= \Config\Database::connect();
        // $siswa=$db->query("SELECT * from tb_siswa");
        // foreach ($siswa->getResultArray() as $row) {
        //     d($row);
        // }

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

}
