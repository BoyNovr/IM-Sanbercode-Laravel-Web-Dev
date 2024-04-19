@extends('layout.master')
@section('judul')
Halaman Show
@endsection
@section('content')
<h2>Show Cast {{$cast->id}}</h2>
<h4>{{$cast->nama}}</h4>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>
<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>
@endsection