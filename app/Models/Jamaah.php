<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model
{
    protected $table = 'jamaahs';
    protected $fillable = [
        'nama',
        'kaji',
        'alamat',
        'no_hp',
    ];

    protected $hidden;

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'kehadiran', 'activity_id', 'jamaah_id');
    }
}
