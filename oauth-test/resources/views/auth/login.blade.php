@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('message'))
        <h5 style="color:indianred">アクセスエラー</h5>
        <p>{{ session('message') }}</p>
    @endif
    <a class=”btn btn-block btn-social btn-google” href="auth/google">
        <i class=”fab fa-google” aria-hidden=”true”> Googleアカウントでログイン</i>
    </a>
</div>
@endsection
