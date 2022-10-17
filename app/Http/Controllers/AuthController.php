<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120195,
            'Nama' => 'Rifdah Inas Nazhifah',
            'Phone' => '081391729542',
            'Class' => 'XII RPL 6'
        ];
    }
}