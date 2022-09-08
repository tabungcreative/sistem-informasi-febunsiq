<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.berita.index',[
            "berita"=>Berita::latest()->get()
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
        return view('dashboard.berita.create');

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
            'gambar' => 'required|image|file|max:2024',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar']=$request->file('gambar')->store('public/berita');
        }

        Berita::create($validatedData); 

        return redirect('/dashboard/berita')->with('success','Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $berita=Berita::find($id);

        return view('dashboard.berita.show',[
            'berita'=>$berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::find($id);

        return view('dashboard.berita.edit',[
            'berita'=>$berita,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $berita = Berita::find($id);

        $rules = [
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'image|file|max:2024',
        ];

        $validatedData=$request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar']=$request->file('gambar')->store('public/berita');
        }

        Berita::where('id',$berita->id)
            ->update($validatedData); 

        return redirect('/dashboard/berita')->with('success','Berita berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        if ($berita->gambar) {
            Storage::delete($berita->gambar);
        }
        Berita::destroy($berita->id); 

        return redirect('/dashboard/berita')->with('success','berita berhasil dihapus!');
    }
}
