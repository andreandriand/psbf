<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoProperti extends Model
{
    use HasFactory;

    protected $table = 'photoproperties';

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function properti()
    {
        return $this->belongsTo('App\Models\Properti', 'id_properti', 'id');
    }
}
