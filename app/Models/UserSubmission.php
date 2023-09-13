<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserSubmission; 


class UserSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Add 'name' to the fillable array
        'event_id',
        'status',
        'message',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function names()
    {
        return $this->hasMany(UserSubmissionName::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSubName()
    {
        return $this->name;
    }

}
