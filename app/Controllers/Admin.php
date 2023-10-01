<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\KabkotModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->destinasi = new \App\Models\DestinationModel();
        $this->kabkot = new \App\Models\KabkotModel();
    }

    public function index()
    {
        return view('admin/index');
    }

    public function destination()
    {
        $data = [
            'kabkot' => $this->kabkot->findAll(),
            'destinasi' => $this->destinasi->findAll(),
        ];

        // dd($data);

        return view('admin/destination', $data);
    }

    public function kabkot()
    {
        $data = $this->kabkot->findAll();
        // dd($data);

        return view('admin/kabkot', $data);
    }

    public function save_destination()
    {
        $model = new DestinationModel();
        $data = [
            'id_kabkot' => $this->request->getPost('id_kabkot'),
            'nama_destinasi' => $this->request->getPost('nama_destinasi'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'lokasi' => $this->request->getPost('lokasi'),
        ];

        // Proses upload gambar
        $gambar = $this->request->getFile('gambar');
        $newName = $gambar->getRandomName();
        $gambar->move('../public/upload/', $newName);

        $data['gambar'] = $newName;

        $model->insert($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Berhasil simpan!');
    }

    public function save_kabkot()
    {
        $model = new KabkotModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];

        // Proses upload gambar
        $thumbnail = $this->request->getFile('thumbnail');
        $newName = $thumbnail->getRandomName();
        $thumbnail->move('../public/thumbnail/', $newName);

        $data['thumbnail'] = $newName;

        $model->insert($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Berhasil simpan!');
    }

    public function getRandomName($file)
    {
        $extension = $file->getClientExtension(); // Dapatkan ekstensi file asli
        $randomName = md5(uniqid(rand(), true)); // Buat nama acak dengan md5

        return "{$randomName}.{$extension}";
    }

    public function delete_destination($id_destination)
    {
        $this->destinasi->delete($id_destination);

        return redirect()->back()->with('success', 'dihapus');
    }

    public function delete_kabkot($id_kabkot)
    {
        $this->kabkot->delete($id_kabkot);

        return redirect()->back()->with('success', 'dihapus');
    }
}