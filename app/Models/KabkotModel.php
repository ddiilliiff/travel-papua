<?php

namespace App\Models;

use CodeIgniter\Model;

class KabkotModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tabel_kabkot';
    protected $primaryKey = 'id_kabkot';
    protected $allowedFields = ['id_kabkot', 'nama', 'thumbnail'];

    public function getKabkot()
    {
        return $this->findAll();
    }

    public function getByKabkot($id_kabkot)
    {
        $query = 'SELECT * FROM tabel_destinasi 
              JOIN tabel_kabkot 
              ON tabel_destinasi.id_kabkot = tabel_kabkot.id_kabkot
              WHERE tabel_destinasi.id_kabkot = ?';

        return $this->db->query($query, [$id_kabkot])->getResultArray();
    }
}
