@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   Selamat Datang @guest @else <strong>{{Auth::user()->name}}</strong>@endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
