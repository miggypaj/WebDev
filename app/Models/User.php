<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthdate',
        'full_address',
        'user_type_id',
        'branch_assigned',
        'email',
        'password',
    ];

    protected $dateFormat = 'Y-m-d';
}
