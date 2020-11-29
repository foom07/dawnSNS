@extends('layouts.logout')

@section('content')

<div id="clear">

<p>ようこそ！DAWNSNSへ！</p>
<p>{{ $username }}さん、</p>
<p>ユーザー登録が完了しました。</p>
<p>さっそく、ログインをしてみましょう。</p>

<p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection
