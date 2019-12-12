<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function Offer(){
        return $this->hasOne(FundCollectionMemberOffer::class,'member','id');
    }
    public function Address(){
        return $this->hasOne(MemberAddress::class,'member','id');
    }
    public function Phone(){
        return $this->hasOne(MemberPhone::class,'member','id');
    }
}
