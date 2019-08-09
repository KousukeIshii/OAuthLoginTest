@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">あなたのユーザー情報</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>名前</h5><p>{{$user->name}}</p>
                    <h5>GoogleID</h5><p>{{$user->google_id}}</p>
                    <h5>Emailアドレス</h5><p>{{$user->email}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
