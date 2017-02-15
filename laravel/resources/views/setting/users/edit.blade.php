@extends('layouts.default')

@section('title', '参加者更新')

@section('content')

    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class=" section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
                <div class="mdl-card__title">
                    <span>参加者情報入力</span>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <ul>
                                <li style="color: red;">{{ $error }}</li>
                            </ul>
                        </div>
                    @endforeach
                @endif
                {!! Form::open(['url' => '/setting/user/update', 'files' => false]) !!}
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $lotteryUser->id }}">
                <input type="hidden" name="group_id" value="{{ $lotteryUser->group_id }}">
                <div class="mdl-card__supporting-text">
                    <div class="form-group mdl-textfield mdl-js-textfield">
                        {!! Form::label('name' ,'氏名', ['class' => 'mdl-textfield__label']) !!}
                        {!! Form::text('name', $lotteryUser->name, ['class' => 'form-control mdl-textfield__input']) !!}
                    </div>
                </div>
                {{--<div class="form-group mdl-card__supporting-text">--}}
                    {{--<span>所属</span>--}}
                    {{--<div>--}}
                        {{--<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">--}}
                            {{--{!! Form::radio('group_id', '1', false, ['class' => 'mdl-radio__button']) !!}--}}
                            {{--<span class="mdl-radio__label">TEST</span>--}}
                        {{--</label>--}}
                        {{--<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">--}}
                            {{--{!! Form::radio('group_id', '2', false, ['class' => 'mdl-radio__button']) !!}--}}
                            {{--<span class="mdl-radio__label">TEST2</span>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group mdl-card__supporting-text">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::checkbox('fixed', '1', $lotteryUser->fixed ? true : false, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">グループ固定</span>
                    </label>
                </div>

                <div class="form-group mdl-card__supporting-text">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::checkbox('default_join', '1', $lotteryUser->default_join ? true : false, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">デフォルト参加</span>
                    </label>
                </div>
                <div class="form-group mdl-card__supporting-text">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::checkbox('default_view', '1', $lotteryUser->default_view ? true : false, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">一覧表示</span>
                    </label>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    {!! Form::submit('更新', ['class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary']) !!}
                    <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect"
                            onclick="window.location='{{ url("/setting") }}'">戻る
                    </button>
                </div>
                {!! Form::close() !!}
            </div>

        </section>
    </div>


@endsection