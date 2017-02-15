@extends('layouts.default')

@section('title', '抽選結果')

@section('style')
    <style>
        .mdl-card__title {
            background-color: #3f51b5;
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="mdl-layout__tab-panel is-active mdl-cell--12-col" id="overview">
        <section class="section--center mdl-grid">
            @foreach($resultList as $groupKey => $resultGroup)
                <div class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--border">
                        <span>グループ{{ $groupKey + 1 }}</span>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">名前</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resultGroup as $user)
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        {{ $user->name  }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </section>

    </div>
@endsection