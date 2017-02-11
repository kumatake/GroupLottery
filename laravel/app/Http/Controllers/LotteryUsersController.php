<?php

namespace App\Http\Controllers;

use App\LotteryUser;
use Illuminate\Http\Request;

class LotteryUsersController extends Controller
{

    // バリデーションルール
    private $validateRule = [
        'name' => 'required|max:20',
        'group_id' => 'required',
        'fixed' => 'required',
        'default_join' => 'required',
        'default_view' => 'required'
    ];

    public function add()
    {
        return view('setting.users.add');
    }


    public function edit($id)
    {
        $lotteryUser = LotteryUser::find($id);
        if ($lotteryUser) {
            return view('setting.users.edit', compact($lotteryUser));
        } else {
            \Session::flash('flash_message', 'ID:' . $id . 'のユーザーは存在しません。');
            return redirect('setting');
        }
    }

    public function create(Request $request)
    {
        // バリデーションを行う
        $this->validate($request, $this->validateRule);

        // 新規データ１件登録
        LotteryUser::create($request->all());

        \Session::flash('flash_message', 'ユーザー登録が完了しました。');
        return redirect('setting');
    }

    public function update()
    {
        return redirect('setting');
    }
}
