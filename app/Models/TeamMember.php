<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'position',
        'profile_picture',
        'bio',
        'is_active',
    ];

    public function getFullName()
    {
        return $this->firstname ." ". $this->lastname;
    }
}
