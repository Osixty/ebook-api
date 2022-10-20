<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120250,
            'Name' => 'Zidan Nazih Alwan',
            'Phone' => '088812888',
            'Class' => 'XII RPL 7',
        ];
    }
}
