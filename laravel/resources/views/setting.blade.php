@extends('layouts.default')

@section('title', '設定')

@section('content')
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid  mdl-shadow--2dp">
            <div class="mdl-card__title">
                <span>参加者設定</span>
            </div>
            <div class="mdl-card mdl-cell mdl-cell--12-col">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                    <tr>
                        <th class="">番号</th>
                        <th class="mdl-data-table__cell--non-numeric">名前</th>
                        <th class="mdl-data-table__cell--non-numeric">所属</th>
                        <th class="mdl-data-table__cell--non-numeric">グループ固定</th>
                        <th class="mdl-data-table__cell--non-numeric">デフォルト参加</th>
                        <th class="mdl-data-table__cell--non-numeric">参加者表示</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="">1</td>
                        <td class="mdl-data-table__cell--non-numeric">田中太郎</td>
                        <td class="mdl-data-table__cell--non-numeric">総務部</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>

                    </tr>
                    <tr>
                        <td class="">1</td>
                        <td class="mdl-data-table__cell--non-numeric">田中太郎</td>
                        <td class="mdl-data-table__cell--non-numeric">総務部</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                    </tr>
                    <tr>
                        <td class="">1</td>
                        <td class="mdl-data-table__cell--non-numeric">田中太郎</td>
                        <td class="mdl-data-table__cell--non-numeric">総務部</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                        <td class="mdl-data-table__cell--non-numeric">○</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mdl-card__actions">
                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" onclick="window.location='{{ url("/setting/user/add") }}'">新規追加</button>
                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" >CSV追加</button>
            </div>
        </section>

    </div>
@endsection