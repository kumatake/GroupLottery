<?php

namespace App\Http\Controllers;

use App\LotteryUser;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    /**
     * 抽選画面
     */
    public function index()
    {
        $lotteryUsers = LotteryUser::all();

        return view('lottery', compact('lotteryUsers'));
    }

    /**
     * 抽選結果画面
     */
    public function result()
    {
        return view('result');
    }
}
