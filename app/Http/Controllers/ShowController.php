<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function index()
    {
        //
        return view('pages.index',[
            "berita"=>Berita::latest()->get(),
            "pengumuman"=>Pengumuman::latest()->get()
        ]);
    }
}
