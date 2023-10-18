<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        return 'Kontroler ShowController';
    }

    public function showData(){
        $data = [
            'Fname' => 'Janusz',
            'Lname' => 'Nowak',
            'City' => 'Poznań'
        ];
        return view('data', $data);
    }
}