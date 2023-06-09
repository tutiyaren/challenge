@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')

<div class="contact">
    <div class="ttl">
        <h2 class="ttl-top">内容確認</h2>
    </div>

    <form class="form" method="post" action="thanks">
    @csrf
        <div class="contact-table">
            <table class="contact-inner">
                {{-- 名前 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">お名前</th>
                    <td class="contact-table__text">
                        <input type="text" name="fullname" readonly value="{{ $items['fullname'] }}">
                    </td>
                </tr>

                {{-- 性別 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">性別</th>
                    <td class="contact-table__text">
                        <input type="text" name="gender" readonly value="{{ $items['gender'] }}">
                    </td>
                </tr>

                {{-- メールアドレス --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">メールアドレス</th>
                    <td class="contact-table__text">
                        <input type="email" name="email" readonly value="{{ $items['email'] }}">
                    </td>
                </tr>

                {{-- 郵便番号 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">郵便番号</th>
                    <td class="contact-table__text">
                        <input type="text" name="mail" readonly value="{{ $items['mail'] }}">
                    </td>
                </tr>

                {{-- 住所 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">住所</th>
                    <td class="contact-table__text">
                        <input type="text" name="address" readonly value="{{ $items['address'] }}">
                    </td>
                </tr>

                {{-- 建物名 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">建物名</th>
                    <td class="contact-table__text">
                        <input type="text" name="build" readonly value="{{ $items['build'] }}">
                    </td>
                </tr>

                {{-- 意見 --}}
                <tr class="contact-table__row">
                    <th class="contact-table__header">ご意見</th>
                    <td class="contact-table__text">
                        <input type="text" name="opinion" readonly value="{{ $items['opinion'] }}">
                    </td>
                </tr>
            </table>
        </div>

        {{-- 送信ボタン --}}
        <div class="form-button">
            <button class="form-button__submit" type="submit">送信</button>
        </div>
        {{-- 修正 --}}
        <div class="form-correct">
            <a href="{{route('form')}}" name="back" class="form-correct__update">修正する</a>
        </div>
    </form>

</div>

@endsection