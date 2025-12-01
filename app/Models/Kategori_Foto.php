<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori_Foto extends Model
{
    use HasFactory;

    protected $guarded = [];

     protected $fillable = [
        'nama_kategori',
     ];

    public function foto()
    {
        return $this->hasMany(
            Foto::class, 'kategori_id');
    }
}
