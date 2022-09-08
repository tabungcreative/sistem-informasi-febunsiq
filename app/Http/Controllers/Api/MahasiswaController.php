<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {

        $mahasiswa = Mahasiswa::all(); 
        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ]);
    }

    public function show($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();

        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ]);
    }
}
