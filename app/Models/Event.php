<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
