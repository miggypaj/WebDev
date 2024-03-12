<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    // Define the table name (optional)
    protected $table = 'user_types';

    // Define the primary key (optional, Laravel assumes 'id' by default)
    protected $primaryKey = 'id';

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'user_type',
    ];
}
