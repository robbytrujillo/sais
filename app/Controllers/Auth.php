<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login',
            'subjudul' => '',
        ];
        return view('v_login', $data);
    }
}
