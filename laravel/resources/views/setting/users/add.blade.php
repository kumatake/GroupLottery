@extends('layouts.default')

@section('title', '参加者新規追加')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            </div>
        @endforeach
    @endif
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="mdl-grid  mdl-shadow--2dp mdl-">

            {!! Form::open(['url' => '/setting/user/create', 'files' => false]) !!}
            {{ csrf_field() }}
            <div class="form-group mdl-textfield mdl-js-textfield">
                {!! Form::label('name' ,'氏名', ['class' => 'mdl-textfield__label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control mdl-textfield__input']) !!}
            </div>
            <div class="form-group">
                <span>所属</span>
                <div>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        {!! Form::radio('group_id', '1', false, ['class' => 'mdl-radio__button']) !!}
                        <span class="mdl-radio__label">TEST</span>
                    </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                        {!! Form::radio('group_id', '2', false, ['class' => 'mdl-radio__button']) !!}
                        <span class="mdl-radio__label">TEST2</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    {!! Form::checkbox('fixed', '1', false, ['class' => 'mdl-checkbox__input']) !!}
                    <span class="mdl-checkbox__label">グループ固定</span>
                </label>
            </div>
            <div class="form-group">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    {!! Form::checkbox('default_join', '1', true, ['class' => 'mdl-checkbox__input']) !!}
                    <span class="mdl-checkbox__label">デフォルト参加</span>
                </label>
            </div>
            <div class="form-group">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    {!! Form::checkbox('default_view', '1', true, ['class' => 'mdl-checkbox__input']) !!}
                    <span class="mdl-checkbox__label">一覧表示</span>
                </label>
            </div>
            {!! Form::submit('登録', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored']) !!}
            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"
                    onclick="window.location='{{ url("/setting") }}'">戻る
            </button>
            {!! Form::close() !!}
        </section>
    </div>


@endsection