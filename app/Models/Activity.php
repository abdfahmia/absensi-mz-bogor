<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;

    protected $table = 'activities';
    protected $fillable = [
        'aktivitas',
        'tanggal',
    ];

    protected $hidden;

    public function jamaahs()
    {
        return $this->belongsToMany(Jamaah::class, 'kehadiran', 'jamaah_id', 'activity_id');
    }
}
