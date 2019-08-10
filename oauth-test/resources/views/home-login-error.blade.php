@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 style="color:indianred">アクセスエラー</h5>
        <p>Home画面へのアクセスにはログインが必要です。</p>
        <a class=”btn ” href="/login">ログイン画面へ</a>
    </div>
@endsection