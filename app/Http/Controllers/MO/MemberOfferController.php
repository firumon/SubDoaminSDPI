<?php

namespace App\Http\Controllers\MO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberOfferController extends Controller
{
    public function print_preview(){
        return view('members_offer.print_preview',['members' => request()->get('member')]);
    }
}
