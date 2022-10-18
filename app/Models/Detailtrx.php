<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailtrx extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='detailtrx';


        public function transaksi()
        {
            return $this->belongsTo(Transaksi::class);
        }
        public function barang()
        {
            return $this->belongsTo(Barang::class);
        }
        public function username()
        {
            return $this->belongsTo(Username::class);
        }
}

