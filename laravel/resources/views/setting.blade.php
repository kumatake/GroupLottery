@extends('layouts.default')

@section('title', '設定')

@section('content')
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="mdl-card mdl-cell mdl-cell--12-col mdl-shadow--2dp">
            <div class="mdl-card__title">
                <span>参加者設定</span>
            </div>
            <div class="mdl-card__supporting-text">
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
                    @if(isset($lotteryUsers))
                        @foreach($lotteryUsers as $user)
                            <tr onclick="window.location='{{ url("/setting/user/edit/" . $user->id) }}'">
                                <td class="">{{ $user->id }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $user->name }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $user->group_id }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $user->fixed ? '○' : '×' }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $user->default_join ? '○' : '×' }}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{ $user->default_view ? '○' : '×' }}</td>
                            </tr>
                        @endforeach
                    @else
                        <td class="mdl-data-table__cell--non-numeric" colspan="6">ユーザーがありません。登録してください。</td>
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <button type="button" class="mdl-button mdl-js-button  mdl-js-ripple-effect mdl-button--colored" onclick="window.location='{{ url("/setting/user/add") }}'">新規追加</button>
                <button type="button" class="mdl-button mdl-js-button  mdl-js-ripple-effect " >CSV追加</button>
            </div>
        </section>

        {{--<section class="mdl-card mdl-cell mdl-cell--12-col mdl-shadow--2dp">--}}
            {{--<div class="mdl-card__title">--}}
                {{--<span>グループ一覧</span>--}}
            {{--</div>--}}
            {{--<div class="mdl-card__supporting-text">--}}
                {{--<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th class="">番号</th>--}}
                        {{--<th class="mdl-data-table__cell--non-numeric">グループ名</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@if(isset($groups))--}}
                        {{--@foreach($groups as $group)--}}
                            {{--<tr>--}}
                                {{--<td class="">{{ $group->id }}</td>--}}
                                {{--<td class="mdl-data-table__cell--non-numeric">{{ $group->name }}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--@else--}}
                        {{--<td class="mdl-data-table__cell--non-numeric" colspan="6">グループがありません。登録してください。</td>--}}
                    {{--@endif--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
            {{--{!! Form::open(['url' => '/setting/group/create', 'files' => false]) !!}--}}
            {{--<div class="mdl-card__actions mdl-card--border">--}}
                {{--<button type="button" class="mdl-button mdl-js-button  mdl-js-ripple-effect mdl-button--colored" onclick="window.location='{{ url("/setting/user/add") }}'">新規追加</button>--}}
                {{--<button type="button" class="mdl-button mdl-js-button  mdl-js-ripple-effect " >CSV追加</button>--}}
            {{--</div>--}}
            {{--{!! Form::close() !!}--}}
        {{--</section>--}}
    </div>
@endsection