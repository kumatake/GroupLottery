<?php

namespace App\Http\Controllers;

use App\LotteryUser;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $lotteryUsers = LotteryUser::all();
        return view('setting', compact('lotteryUsers'));
    }

    public function lotteryUserEdit()
    {

    }


}
