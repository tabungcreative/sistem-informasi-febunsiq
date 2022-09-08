<?php

namespace App\Http\Controllers;

use App\Models\FileUnduhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileUnduhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.fileunduhan.index',[
            "fileunduhan"=>FileUnduhan::latest()->get()
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
        return view('dashboard.fileunduhan.create');

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
            'nama_file' => 'required|max:255',
            'file' => 'mimes:pdf,xls,xlsx,doc,docx|file|max:2024',
        ]);

        if ($request->file('file')) {
            $validatedData['file']=$request->file('file')->store('file-unduhan');
        }

        FileUnduhan::create($validatedData); 

        return redirect('/dashboard/file-unduhan')->with('success','File unnduhan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUnduhan  $fileUnduhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $fileunduhan = FileUnduhan::find($id);
        return view('dashboard.fileunduhan.show',[
            'fileunduhan'=>$fileunduhan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUnduhan  $fileUnduhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fileunduhan = FileUnduhan::find($id);
        return view('dashboard.fileunduhan.edit',[
            'fileunduhan'=>$fileunduhan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FileUnduhan  $fileUnduhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fileunduhan = FileUnduhan::find($id);
        //
        $rules = [
            'nama_file' => 'required|max:255',
            'file' => 'mimes:pdf,xls,xlsx,doc,docx|file|max:2024',
        ];

        $validatedData=$request->validate($rules);

        if ($request->file('file')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['file']=$request->file('file')->store('file-unduhan');
        }

        FileUnduhan::where('id',$fileunduhan->id)
            ->update($validatedData); 

        return redirect('/dashboard/file-unduhan')->with('success','File Unduhan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUnduhan  $fileUnduhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fileunduhan = FileUnduhan::find($id);
        //
        if ($fileunduhan->file) {
            Storage::delete($fileunduhan->file);
        }
        FileUnduhan::destroy($fileunduhan->id); 

        return redirect('/dashboard/file-unduhan')->with('success','File unduhan berhasil dihapus!');
    }
}
