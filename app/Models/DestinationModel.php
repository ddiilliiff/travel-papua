<?php

namespace App\Models;

use CodeIgniter\Model;

class DestinationModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tabel_destinasi';
    protected $primaryKey = 'id_destinasi';
    protected $allowedFields = ['id_destinasi', 'id_kabkot', 'nama_destinasi', 'harga', 'deskripsi', 'lokasi', 'gambar'];

    public function getDestination()
    {
        return $this->findAll();
    }

    public function saveDestination($data)
    {
        $query = $this->db->table($this->table)->insert($data);

        return $query;
    }

    public function getByKabkot($id)
    {
        return $this->db->table('tabel_destinasi')
            ->where('tabel_destinasi.id_kabkot', $id)
            ->get()
            ->getResultArray();
    }
}