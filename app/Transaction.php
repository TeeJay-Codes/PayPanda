<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['beneficiary_id', 'beneficiary_name', 'initiator_name', 'amount', 'details', 'ref', 'status'];

    public function user ()
    {
        return $this->belongsTo("App\User");
    }
}
