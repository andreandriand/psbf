<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }

    public function properti()
    {
        return $this->belongsTo('App\Models\Properti', 'id_properti', 'id');
    }

    public function metode()
    {
        return $this->belongsTo('App\Models\Payment', 'id_metode', 'id');
    }

    public function pesanan()
    {
        return $this->hasOne('App\Models\Pesanan', 'id_transaksi', 'id');
    }
}
