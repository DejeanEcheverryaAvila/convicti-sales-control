<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'coordinates',
        'user_id',
        'directorate_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'coordinates' => 'point', // Ensures the coordinates are cast to a point type
    ];

    /**
     * Get the user that owns the unit.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the directorate that owns the unit.
     */
    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }
}
