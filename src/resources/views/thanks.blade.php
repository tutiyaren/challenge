@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="{{asset('css/thanks.css')}}">
@endsection

@section('content')

<div class="thank">
    <div class="thanks-content">
        <h3 class="thanks-content__head">ご意見いただきありがとうございました。</h3>
    </div>

    <div class="form-button">
        <button class="form-button__submit" type="submit">トップページへ</button>
    </div>
</div>

@endsection