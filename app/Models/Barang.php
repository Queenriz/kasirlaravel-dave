<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='barang';

    public function detailtrx()
    {
        return $this->hasMany(Detailtrx::class);
    }
}
