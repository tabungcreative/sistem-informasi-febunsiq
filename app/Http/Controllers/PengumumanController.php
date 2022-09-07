<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.pengumuman.index',[
            "pengumuman"=>Pengumuman::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'file' => 'mimes:pdf,xls,xlsx,doc,docx|file|max:2024',
        ]);

        if ($request->file('file')) {
            $validatedData['file']=$request->file('file')->store('file-pengumuman');
        }

        Pengumuman::create($validatedData); 

        return redirect('/dashboard/pengumuman')->with('success','Pengumuman berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
        return view('dashboard.pengumuman.show',[
            'pengumuman'=>$pengumuman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
        return view('dashboard.pengumuman.edit',[
            'pengumuman'=>$pengumuman,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        
        $rules = [
            'judul' => 'required|max:255',
            'isi' => 'required',
            'file' => 'mimes:pdf,xls,xlsx,doc,docx|file|max:2024',
        ];

        $validatedData=$request->validate($rules);

        if ($request->file('file')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['file']=$request->file('file')->store('file-pengumuman');
        }

        Pengumuman::where('id',$pengumuman->id)
            ->update($validatedData); 

        return redirect('/dashboard/pengumuman')->with('success','Pengumuman berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->file) {
            Storage::delete($pengumuman->file);
        }
        Pengumuman::destroy($pengumuman->id); 

        return redirect('/dashboard/pengumuman')->with('success','Pengumuman berhasil dihapus!');
    }
}
