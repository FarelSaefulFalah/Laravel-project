@extends('layout.layout')
@section('Content')
    <div class="contrainer">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Perkenalan
                </div>
                <div class="card-body">
                    <p> Nama:{{ $data['Nama'] }}</p>
                    <p> Agama:{{ $data['Agama'] }}</p>
                    <p> Alamat:{{ $data['Alamat'] }}</p>
                    <p>Hobi</p>
                    <ol>
                        @foreach ($data['Hobi'] as $item)
                            <li>{{ $item }}</li>
                    </ol>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
