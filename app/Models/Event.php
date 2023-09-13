<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'start_date', 'end_date', 'status'];
    protected $dates = ['start_date', 'end_date'];

    public function submissions()
    {
        return $this->hasMany(UserSubmission::class);
    }
    
    public function getSDate()
    {
        return $this->start_date;
    }

    public function getEDate()
    {
        return $this->end_date;
    }

}
