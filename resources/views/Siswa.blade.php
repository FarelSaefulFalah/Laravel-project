@php
    // $siswa = App\models\Siswa::orderby('id', 'desc')->get();
    $sekolah2 = App\models\Sekolah::find(20);
    $sekolah4 = App\models\Sekolah::first();
@endphp

{{-- @foreach ($siswa as $data)
    <h1>ID : {{ $data->id }}</h1>
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Kelas :{{ $data->Kelas }}</h1>
    <h1>Jenis Kelamin :{{ $data->jenis_kelamin }}</h1>
    <h1>Alamat :{{ $data->alamat }}</h1>
@endforeach --}}
<h1>NO FOREACH</h1>
<h1>ID : {{ $sekolah2->id ?? 'kosong' }}</h1>
<h1>Nama : {{ $sekolah2->Nama ?? 'kosong' }}</h1>
<h1>Kelas :{{ $sekolah2->alamat ?? 'kosong' }}</h1>
<h1>Email :{{ $sekolah2->email ?? 'kosong' }}</h1>
<h1>Telepon :{{ $sekolah2->tlp ?? 'kosong' }}</h1>
<h1>Status :{{ $sekolah2->status ?? 'kosong' }}</h1>
<hr>
<h1>FIRST</h1>
<h1>ID : {{ $sekolah4->id }}</h1>
<h1>Nama : {{ $sekolah4->Nama }}</h1>
<h1>Kelas :{{ $sekolah4->alamat }}</h1>
<h1>Email :{{ $sekolah4->email }}</h1>
<h1>Telepon :{{ $sekolah4->tlp }}</h1>
<h1>Status :{{ $sekolah4->status }}</h1>
<hr>
