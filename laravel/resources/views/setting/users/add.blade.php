@extends('layouts.default')

@section('title', '参加者新規追加')

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
                {!! Form::open(['url' => '/setting/user/create', 'files' => false]) !!}
                {{ csrf_field() }}
                <input type="hidden" name="group_id" value="1">
                <div class="mdl-card__supporting-text">
                    <div class="form-group mdl-textfield mdl-js-textfield">
                        {!! Form::label('name' ,'氏名', ['class' => 'mdl-textfield__label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control mdl-textfield__input']) !!}
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
                        {!! Form::checkbox('fixed', '1', false, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">グループ固定</span>
                    </label>
                </div>

                <div class="form-group mdl-card__supporting-text">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::checkbox('default_join', '1', true, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">デフォルト参加</span>
                    </label>
                </div>
                <div class="form-group mdl-card__supporting-text">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        {!! Form::checkbox('default_view', '1', true, ['class' => 'mdl-checkbox__input']) !!}
                        <span class="mdl-checkbox__label">一覧表示</span>
                    </label>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    {!! Form::submit('登録', ['class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary']) !!}
                    <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect"
                            onclick="window.location='{{ url("/setting") }}'">戻る
                    </button>
                </div>
                {!! Form::close() !!}
            </div>

        </section>
    </div>


@endsection