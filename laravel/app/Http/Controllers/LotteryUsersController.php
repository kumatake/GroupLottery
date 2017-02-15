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
    ];

    public function add()
    {
        return view('setting.users.add');
    }


    public function edit($id)
    {
        $lotteryUser = LotteryUser::find($id);
        if ($lotteryUser) {
            return view('setting.users.edit', compact('lotteryUser'));
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
        $user = new LotteryUser();
        $user->name = $request->name;
        $user->group_id = $request->group_id;
        $user->fixed = isset($request->fixed) ? 1 : 0;
        $user->default_join = isset($request->default_join) ? 1 : 0;
        $user->default_view = isset($request->default_view) ? 1 : 0;

        $user->save();

        \Session::flash('flash_message', 'ユーザー登録が完了しました。');
        return redirect('setting');
    }

    public function update(Request $request)
    {
        // バリデーションを行う
        $this->validate($request, $this->validateRule);

        // 新規データ１件登録
        $user = LotteryUser::find($request->id);
        $user->name = $request->name;
        $user->group_id = $request->group_id;
        $user->fixed = isset($request->fixed) ? 1 : 0;
        $user->default_join = isset($request->default_join) ? 1 : 0;
        $user->default_view = isset($request->default_view) ? 1 : 0;

        $user->save();

        \Session::flash('flash_message', 'ユーザーを更新しました。');
        return redirect('setting');
    }
}
