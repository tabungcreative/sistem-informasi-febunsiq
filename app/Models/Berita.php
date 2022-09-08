<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Berita extends Model
{
    use HasFactory;
    
    protected $fillable =['judul','isi','gambar'];
    protected $table = 'berita';

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

}
