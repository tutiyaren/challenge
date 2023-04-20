@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/manege.css')}}">
@endsection

@section('content')

<div class="manege">
    <div class="ttl">
        <h2 class="ttl-top">管理システム</h2>
    </div>

    {{-- 検索 --}}
    <form action="/manege" class="form" method="get">
    @csrf
        <div class="form-item">
            <div class="form-name-gender">
                <span class="form-name">お名前</span>
                <input type="text" class="form-name-input" name="keyname" value="{{old('keyname')}}">
                <span class="form-gender">性別</span>
                <input type="radio" class="form-gender-input" name="keygender" checked value="{{old('keygender')}}">
                <span class="form-gender-all">全て</span>
                <input type="radio" class="form-gender-input" name="keygender" value="{{old('keygender')}}">
                <span class="form-gender-men">男性</span>
                <input type="radio" class="form-gender-input" name="keygender" value="{{old('keygender')}}">
                <span class="form-gender-woman">女性</span>
            </div>

            <div class="date">
                <span class="date-ttl">登録日</span>
                <input type="date" value="{{old('startdate')}}"class="date-inner"name="startdate">
                <span class="date-space">~</span>
                <input type="date" value="{{old('enddate')}}" class="date-inner" name="enddate">
            </div>

            <div class="email">
                <span class="email-ttl">メールアドレス</span>
                <input type="email" class="email-inner" name="keyemail" value="{{old('keyemail')}}">
            </div>
        </div>

        <div class="form-button">
            <button class="form-button__submit">検索</button>
        </div>
        <div class="form-reset">
            <a href="{{route('manege')}}" class="form-reset__clear">リセット</a>
        </div>
    </form>

    {{-- ページネーション --}}
    <div style="display: flex;" style="width: 80%;" style="justify-content: space-between;">
        <div>
            @if(count($topics) > 0)
            <p>全{{$topics->total()}}件中{{($topics->currentPage()-1) * $topics->perPage()+1}}~{{(($topics->currentPage()-1) * $topics->perPage()+1)+(count($topics)-1)}}件</p>
            @endif
        </div>

        <p>{{$topics->links('vendor.pagination.topics')}}</p>
    </div>

    <div class="contact-table">
        <table class="contact-table__inner">
            {{-- 検索カラム --}}
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    <span class="contact-table__header-ttl">ID</span>
                    <span class="contact-table__header-ttl">お名前</span>
                    <span class="contact-table__header-ttl">性別</span>
                    <span class="contact-table__header-ttl">メールアドレス</span>
                    <span class="contact-table__header-ttl">ご意見</span>
                </th>
            </tr>
            {{--　中身　--}}
            @foreach($lists as $list)
            <tr class="contact-table__row">
                <td class="contact-table__item">
                    <form action="/manege" class="delete-form" method="post">
                    @method('DELETE')
                    @csrf
                        <div class="delete-form__item">
                            <p class="delete-form__item-id">{{$list['id']}}</p>
                        </div>
                        <div classdelete-form__item">
                            <p class="delete-form__item-name">{{$list['fullname']}}</p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-gender">{{$list['gender']}}</p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-email">{{$list['email']}}</p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-opinion">{{Illuminate\Support\Str::limit($list->opinion, 50, '…')}}</p>
                        </div>
                        <div class="delete-button">
                            <input type="hidden" name="id" value="{{$list['id']}}">
                            <button class="delete-button__submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</div>


@endsection