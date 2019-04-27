<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleRecipient extends Model
{
    protected $fillable = [
        'code', 'fullName', 'email', 'address', 'cb1', 'cb2', 'cb3'
    ];
}
