<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StructureData extends Model
{
    protected $fillable = [
        'name','quantity','cost','value','crop_claimant_id'
    ];
}
