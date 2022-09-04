<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class FileUnduhan extends Model
{
    use HasFactory;

    protected $table = 'fileunduhan';
    
    protected $fillable = ['nama_file','file'];
    
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }
}
