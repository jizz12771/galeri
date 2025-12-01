<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fotografer extends Model
{
    protected $guarded = [];

     protected $fillable = [
        'nama_fotografer',
        'kontak',
    ];

    public function foto()
    {
        return $this->hasMany(
            Foto::class, 'fotografer_id');
    }
}
    