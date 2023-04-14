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
    <form action="" class="form" method="">
    @csrf
        <div class="form-item">
            <div class="form-name-gender">
                <span class="form-name">お名前</span>
                <input type="text" class="form-name-input"name="name" value="{{old('name')}}">
                <span class="form-gender">性別</span>
                <input type="radio" class="form-gender-input" name="gender" checked>
                <span class="form-gender-all">全て</span>
                <input type="radio" class="form-gender-input" name="gender">
                <span class="form-gender-men">男性</span>
                <input type="radio" class="form-gender-input" name="gender">
                <span class="form-gender-woman">女性</span>
            </div>

            <div class="date">
                <span class="date-ttl">登録日</span>
                <input type="date" class="date-inner"name="date">
                <span class="date-space">~</span>
                <input type="date" class="date-inner" name="date">
            </div>

            <div class="email">
                <span class="email-ttl">メールアドレス</span>
                <input type="email" class="email-inner" name="email">
            </div>
        </div>

        <div class="form-button">
            <button class="form-button__submit">検索</button>
        </div>
        <div class="form-reset">
            <a href="" class="form-reset__clear">リセット</a>
        </div>
    </form>

    {{-- ページネーション --}}

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
            <tr class="contact-table__row">
                <td class="contact-table__item">
                    <form action="" class="delete-form" method="">
                    @method('DELETE')
                    @csrf
                        <div class="delete-form__item">
                            <p class="delete-form__item-a"></p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-b"></p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-c"></p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-d"></p>
                        </div>
                        <div class="delete-form__item">
                            <p class="delete-form__item-e"></p>
                        </div>
                        <div class="delete-button">
                            <button class="delete-button__submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</div>


@endsection