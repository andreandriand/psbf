<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    use HasFactory;

    protected $table = 'propertis';

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'user');
    }

    public function photo()
    {
        return $this->hasMany('App\Models\PhotoProperti', 'id_properti', 'id');
    }

    public function harga()
    {
        return $this->hasMany('App\Models\HargaProperti', 'id_properti', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_properti', 'id');
    }
}
