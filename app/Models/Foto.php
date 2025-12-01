<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{

    protected $guarded = [];

    protected $fillable = [
        'judul',
        'file_path',
        'kategori_id',
        'fotografer_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori_Foto::class, 'kategori_id');
    }

    public function fotografer()
    {
        return $this->belongsTo(Fotografer::class, 'fotografer_id');
    }


}

