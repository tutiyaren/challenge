@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm">
    <div class="ttl">
        <h2 class="ttl-top">お問い合わせ</h2>
    </div>

    <form class="form" method="" action="">
    @csrf

        {{-- 名前 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">お名前</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__name">
                    <input type="text" class="form-group__first-name" name="first-name" value="{{old('first-name')}}">
                    <input type="text" class="form-group__last-name" name="last-name" value="{{old('last-name')}}">
                </div>
                <div class="example-name">
                    <span class="example-first-name">例）山田</span>
                    <span class="example-first-name">例）太郎</span>
                </div>
            </div>
        </div>

        {{-- 性別 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">性別</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__gender">
                    <input type="radio" class="form-group__gender-men" name="gender" value="{{old('')}}" checked>
                    <span class="men">男性</span>
                    <input type="radio" class="form-group__gender-woman" name="gender" value="{{old('')}}">
                    <span class="woman">女性</span>
                </div>
            </div>
        </div>

        {{-- メールアドレス --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">メールアドレス</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__input">
                    <input type="email" class="form-group__email" name="email" value="{{old('')}}">
                </div>
                <div class="example">
                    <span class="example-email">例）test@example.com</span>
                </div>
            </div>
        </div>

        {{-- 郵便番号 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">郵便番号</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__input">
                    <span class="form-group__logo">〒</span>
                    <input type="text" class="form-group__mail" name="mail" value="{{old('')}}">
                </div>
                <div class="example-mail">
                    <span class="example-mail__number">例）123-4567</span>
                </div>

            </div>
        </div>

        {{-- 住所 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">住所</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__input">
                    <input type="text" class="form-group__address" name="address" value="{{old('')}}">
                </div>
                <div class="example">
                    <span class="example-address">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                </div>
            </div>
        </div>

        {{-- 建物名 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">建物名</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__input">
                    <input type="text" class="form-group__build" name="build" value="{{old('')}}">
                </div>
                <div class="example">
                    <span class="example-build">例）千駄ヶ谷マンション101</span>
                </div>
            </div>
        </div>

        {{-- ご意見 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">ご意見</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__textarea">
                    <textarea name="opinion" id="" cols="20" rows="6" class="form-group__opinion" value="{{old('')}}"></textarea>
                </div>
            </div>
        </div>

        {{-- 確認ボタン --}}
        <div class="form-button">
            <button class="form-button__submit" type="submit">確認</button>
        </div>

    </form>
</div>
@endsection