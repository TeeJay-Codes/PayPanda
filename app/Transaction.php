<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['beneficiary_id', 'amount', 'details', 'ref', 'status'];
}
