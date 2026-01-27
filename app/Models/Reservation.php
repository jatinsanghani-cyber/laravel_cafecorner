<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Fields allowed to be inserted
    protected $fillable = [
        'user_id',
        'phone',
        'date',
        'time',
        'guests',
        'seating',
        'occasion',
        'notes',
    ];

    // Reservation belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
