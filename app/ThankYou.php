<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThankYou extends Model
{
    protected $fillable = [
        'sampleRecipient_id', 'Q1', 'Q2'
    ];
}
