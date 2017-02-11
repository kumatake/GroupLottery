@extends('layouts.default')

@section('title', 'グループ抽選')

@section('content')
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                    <span>参加者設定</span>
                </div>
                <div class="mdl-card__supporting-text">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                        <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">参加</th>
                            <th class="mdl-data-table__cell--non-numeric">名前</th>
                            <th class="mdl-data-table__cell--non-numeric">所属</th>
                            <th class="mdl-data-table__cell--non-numeric">固定</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($lotteryUsers))
                            @foreach($lotteryUsers as $user)
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                            {!! Form::checkbox('join[]', $user->id, $user->default_join ? true : false,
                                             ['class' => 'mdl-checkbox__input ']) !!}
                                        </label>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $user->name }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $user->group_id }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $user->fixed ? '○' : '×' }}</td>
                                </tr>
                            @endforeach
                        @else
                            <td class="mdl-data-table__cell--non-numeric" colspan="6">ユーザーがありません。登録してください。</td>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button type="button"
                            class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored">抽選
                    </button>
                </div>
            </div>
        </section>

    </div>
@endsection