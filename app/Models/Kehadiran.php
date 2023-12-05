<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kehadiran extends Model
{
    // use HasFactory;

    use SoftDeletes;
    protected $table = 'kehadiran';
    protected $hidden;

    public function jamaahs()
    {
        return $this->belongsToMany(Jamaah::class, 'kehadiran', 'id', 'jamaah_id');
    }

    public function activities()
    {
        return $this->BelongsToMany(Activity::class, 'kehadiran', 'id', 'activity_id');
    }
}
