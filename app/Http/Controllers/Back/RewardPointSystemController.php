<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardPointSystemController extends Controller
{
    /**
     * Summary of index
     * @return void
     */
    public function index()
    {
        return view('back.rewardPoint.index');
    }


}
