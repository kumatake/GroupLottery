@extends('layouts.default')

@section('title', 'グループ抽選')

@section('content')
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid  mdl-shadow--2dp">
            <div class="mdl-card__title">
                <span>参加者設定</span>
            </div>
            <div class="mdl-card mdl-cell mdl-cell--12-col">
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                    <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">名前</th>
                        <th class="mdl-data-table__cell--non-numeric">所属</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($lotteryUsers))
                        @foreach($lotteryUsers as $user)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">田中太郎</td>
                                <td class="mdl-data-table__cell--non-numeric">総務部</td>
                            </tr>
                        @endforeach
                    @else
                        <td class="mdl-data-table__cell--non-numeric" colspan="6">ユーザーがありません。登録してください。</td>
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="mdl-card__actions">
                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">抽選</button>
            </div>
        </section>

    </div>
@endsection