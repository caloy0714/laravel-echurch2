<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Add 'name' to the fillable array
        'event_id',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function names()
    {
        return $this->hasMany(UserSubmissionName::class);
    }

}
