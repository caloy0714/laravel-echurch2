<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 

class BaptismForm extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'name_of_child',
        'place_of_birth',
        'father',
        'father_place_of_birth',
        'mother',
        'mother_place_of_birth',
        'kind_of_union',
        'date_of_birth',
        'date_of_baptism',
        'godfather',
        'residence_of_godfather',
        'godmother',
        'residence_of_godmother',
        'other_sponsors',
        'status',
        'message',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function show()
    // {
    //     $baptismForms = BaptismForm::all();

    //     return view('user.baptism.show', compact('baptismForms'));
    // }

    
    public function getChild()
    {
        return $this->name_of_child;
    }

}
