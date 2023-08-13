<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $useTimestamps = true;

    public function getSiswa($id_siswa=false)
    {
        if($id_siswa==false){
            return $this->findAll();
        }

        return $this->where('id_siswa', $id_siswa)->first();
    }

}