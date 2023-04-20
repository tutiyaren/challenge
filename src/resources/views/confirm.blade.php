@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm">
    <div class="ttl">
        <h2 class="ttl-top">お問い合わせ</h2>
    </div>

    <form class="form" method="post" action="/contact">
    @csrf

        {{-- 名前 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">お名前</span>
                <span class="form-group__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__name">
                    <input type="text" class="form-group__first-name" name="fullname" value="{{old('fullname')}}">
                    <input type="text" class="form-group__last-name" name="fullname" value="{{old('fullname')}}">
                </div>
                <div class="example-name">
                    <span class="example-first-name">例）山田</span>
                    <span class="example-first-name">例）太郎</span>
                </div>
                <div class="form-error">
                @error('fullname')
                {{$message}}
                @enderror
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
                        <input type="radio" checked class="form-group__gender-men" name="gender" value="{{old('男性')}}" id="men">
                        <label for="men"><span class="men">男性</span></label>
                        <input type="radio" class="form-group__gender-woman" name="gender" value="{{old('女性')}}" id="woman">
                        <label for="woman"><span class="woman">女性</span></label>
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
                    <input type="email" class="form-group__email" name="email" value="{{old('email')}}">
                </div>
                <div class="example">
                    <span class="example-email">例）test@example.com</span>
                </div>
                <div class="form-error">
                @error('email')
                {{$message}}
                @enderror
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
                    <input type="text" class="form-group__mail" name="mail" value="{{old('mail')}}">
                </div>
                <div class="example-mail">
                    <span class="example-mail__number">例）123-4567</span>
                </div>
                <div class="form-error">
                @error('mail')
                {{$message}}
                @enderror
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
                    <input type="text" class="form-group__address" name="address" value="{{old('address')}}">
                </div>
                <div class="example">
                    <span class="example-address">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                </div>
                <div class="form-error">
                @error('address')
                {{$message}}
                @enderror
                </div>
            </div>
        </div>

        {{-- 建物名 --}}
        <div class="form-group">
            <div class="form-group__ttl">
                <span class="form-group__item">建物名</span>
            </div>
            <div class="form-group__content">
                <div class="form-group__input">
                    <input type="text" class="form-group__build" name="build" value="{{old('build')}}">
                </div>
                <div class="example">
                    <span class="example-build">例）千駄ヶ谷マンション101</span>
                </div>
                <div class="form-error">
                @error('build')
                {{$message}}
                @enderror
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
                    <textarea name="opinion" id="" cols="20" rows="6" class="form-group__opinion" value="{{old('opinion')}}"></textarea>
                </div>
                <div class="form-error">
                @error('opinion')
                {{$message}}
                @enderror
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