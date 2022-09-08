<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.dosen.index',[
            "dosen"=>Dosen::latest()->get()
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
        return view('dashboard.dosen.create');
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
            'nidn' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        Dosen::create($validatedData); 

        return redirect('/dashboard/dosen')->with('success','Dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $dosen=Dosen::find($id);

        return view('dashboard.dosen.show',[
            'dosen'=>$dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dosen = Dosen::find($id);
        return view('dashboard.dosen.edit',[
            'dosen'=>$dosen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $dosen = Dosen::find($id);

        $rules = [
            'nidn' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
        ];

        $validatedData=$request->validate($rules);

        Dosen::where('id',$dosen->id)
            ->update($validatedData); 

        return redirect('/dashboard/dosen')->with('success','dosen berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dosen = Dosen::find($id);
        Dosen::destroy($dosen->id); 

        return redirect('/dashboard/dosen')->with('success','dosen berhasil dihapus!');
    }
}
