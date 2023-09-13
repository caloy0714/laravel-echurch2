<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubmissionName extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'user_submission_id',
    ];


    public function submission()
    {
        return $this->belongsTo(UserSubmission::class);
    }


}
