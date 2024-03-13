<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'min_amt',
        'max_amt',
        'rates',
    ];

    public function getRatesAttribute($value)
    {

        return json_decode($value, true);
    }

    public function setRatesAttribute($value)
    {
        $this->attributes['rates'] = json_encode($value);
    }
}
