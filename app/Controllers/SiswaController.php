<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Siswa;

class SiswaController extends BaseController
{
    public function index()
    {
        $siswaModel = new Siswa();
        $siswa = $siswaModel->findAll();
        $data = [
            'title' => 'Siswa',
            'siswa' => $siswa
        ];

        return view('templates/header', $data)
            . view('templates/navbar')
            . view('siswa/list', $data)
            . view('templates/footer');
    }
    public function create()
    {
        $data = [
            'title' => 'create Siswa'
        ];

        return view('templates/header', $data)
            . view('siswa/create')
            . view('templates/footer');
    }
}
