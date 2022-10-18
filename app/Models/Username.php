<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Username extends Model
{
    use HasFactory;

    protected $table = 'username';
    protected $guarded = [];

    public function detailtrx(){
        return $this->hasMany(Detailtrx::class);
    }
}
