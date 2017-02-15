<?php

namespace App\Http\Controllers;

use App\LotteryUser;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class LotteryController extends Controller
{
    /**
     * 抽選画面
     */
    public function index()
    {
        $lotteryUsers = LotteryUser::where('default_view', true)
            ->orderBy('id', 'asc')
            ->get();

        return view('lottery', compact('lotteryUsers'));
    }

    /**
     * 抽選結果画面
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function result(Request $request)
    {
        if (isset($request->join) && count($request->join) > 2) {
            $joinIdList = $request->join;
        } else {
            \Session::flash('flash_message', '参加者は３人以上選択してください。');
            return redirect('lottery');
        }

        // 固定グループ
        $fixedCount = 2;

        // グループ数
        $group = 3;

        /** @var Collection $fixedList */
        $fixedList = LotteryUser::where('fixed', true)
            ->whereIn('id', $joinIdList)
            ->get();

        /** @var Collection $notfixedList */
        $notfixedList = LotteryUser::where('fixed', false)
            ->whereIn('id', $joinIdList)
            ->get();

        // シャッフル
        $fixedList = $fixedList->shuffle();
        $notfixedList = $notfixedList->shuffle();

        $resultList = [];

        // 固定グループ分を追加
        $nowX = 0;
        $nowY = 0;
        foreach ($fixedList as $fixedData) {
            $resultList[$nowX][$nowY] = $fixedData;
            // 1加算
            $nowX++;

            if ($nowX % $fixedCount == 0) {
                // 指定の個数を超えた場合カウントアップし初期化
                $nowY++;
                $nowX = 0;
            }
        }

        // 非固定グループ分を追加
        $nowX = 0;
        $nowY = 0;
        foreach ($notfixedList as $notfixedData) {

            // 未設定まで加算する
            while (isset($resultList[$nowX][$nowY])) {
                // 1加算
                $nowX++;

                if ($nowX % $group == 0) {
                    // 指定の個数を超えた場合カウントアップし初期化
                    $nowY++;
                    $nowX = 0;
                }
            }

            // 入っていない場合データを設定する
            $resultList[$nowX][$nowY] = $notfixedData;
        }

        return view('result', compact('resultList'));
    }
}
