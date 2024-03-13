<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'reference_number',
        'sender_name',
        'sender_contact',
        'recipient_name',
        'transaction_type',
        'amount_local_currency',
        'currency_conversion_code',
        'amount_converted',
        'transaction_status',
        'branch_sent',
        'branch_recieved',
        'transfer_fee_id',
        'date_time_transaction'
    ];

    protected $dateFormat = 'Y-m-d';
}
