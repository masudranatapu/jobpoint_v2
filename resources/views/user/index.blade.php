@extends('user.layout.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                Hi, {{ Auth::user()->name }} You are login as a user.
            </div>
        </div>
    </div>
@endsection