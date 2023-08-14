<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $useTimestamps = true;
     protected $allowedFields = ['nama_siswa', 'nisn', 'jenis_kelamin', 'alamat', 'foto'];

    public function getSiswa($id_siswa=false)
    {
        if($id_siswa==false){
            return $this->findAll();
        }

        return $this->where('id_siswa', $id_siswa)->first();
    }

    public function updateSiswa($id_siswa, $data)
    {
        return $this->update($id_siswa, $data);
    }

    public function addSiswa($data)
    {
        return $this->insert($data);
    }
    
    public function deleteSiswa($id_siswa)
    {
        return $this->delete($id_siswa);
    }

}