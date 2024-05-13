@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Daftar Hewan
                </div>
                <div class="card-body">
                    <ol>
                        @foreach ($Hewan as $item)
                            @if ($item == 'Lion')
                                <li>{{ $item }} - Hewan Berbahaya</li>
                            @else
                                <li>{{ $item }}</li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
