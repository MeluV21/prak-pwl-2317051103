<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($nama = "Melissa", $npm = "2317051103", $kelas = "C") {  
    $data = [
        'nama' => 'Melissa',
        'npm' => '2317051103',
        'kelas' => 'C'
    ];
        return view('profile', $data);  
    } 
}
