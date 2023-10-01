<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\KabkotModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->destinasi = new DestinationModel();
        $this->kabkot = new KabkotModel();
    }

    public function index(): string
    {
        $data = $this->kabkot->findAll();

        return view('index', $data);
    }

    public function about_kabkot($id_kabkot)
    {
        $data = $this->destinasi->getByKabkot($id_kabkot);
        // dd($data);

        return view('about', $data);
    }

    public function about(): string
    {
        return view('about');
    }

    public function jasa_travel(): string
    {
        return view('jasa_travel');
    }

    public function login(): string
    {
        return view('login');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
