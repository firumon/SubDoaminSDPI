<?php

namespace App\Http\Controllers\BV;

use App\BabriVerdictPresidentLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BabriVerdictPresidentLetterController extends Controller
{
    public function create(Request $request){
        $BVPL = BabriVerdictPresidentLetter::create($request->only(['name','phone','address']));
        return view('babri_verdict.president_letter.index',['person' => $BVPL->id]);
    }
}
