<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropData extends Model
{
    protected $fillable = [
        'type', 'name', 'maturity','price','unit','crop_claimant_id'
    ];
}
