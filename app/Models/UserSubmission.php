<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserSubmission; 
use App\Models\User; 


class UserSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'event_id',
        'status',
        'message',
    ];

    
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
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
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function getMessage()
    {
        return $this->message;
    }


}
