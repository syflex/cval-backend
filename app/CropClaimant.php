<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropClaimant extends Model
{
    Protected $fillable = ['claimant_id','first_name','last_name','other_name'
        ,'location','community','coordinates','image','signature','attorney_signature','finger_print','valuer_id'];
}
