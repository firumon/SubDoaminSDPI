<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FundCollectionMemberOffer extends Model
{
    protected $guarded = [];

    public function Member(){
        return $this->belongsTo(Member::class,'member','id');
    }
}
