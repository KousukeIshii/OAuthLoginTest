@extends('layouts/app')
@section('content')
<div class="container col-md-4">
    <div class="card">
        <div class="card-header">ログイン</div>
        <div class="card-body">
            <a class="btn btn-block btn-social btn-google-inverse" href="auth/google">
                <i class="fab fa-google" aria-hidden="true"> Googleアカウントでログイン</i>
            </a>
        </div>
    </div>
</div>
@endsection
