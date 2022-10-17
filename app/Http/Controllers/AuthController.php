<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
                'NIS' => 1234567,
                'Name' => 'Kelvin Ferdinan',
                'Phone' => '081222003380',
                'Class' => 'XII RPL 4'
            ];
    }
}
