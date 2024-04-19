@extends('layout.master')
@section('judul')
Halaman Edit data
@endsection
@section('content')
<div>
        <h2>Edit Cast {{$cast->id}}</h2>
        <form action="/cast/{{$cast->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="cast" placeholder="Masukkan nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">umur</label>
                <input type="number" class="form-control" name="umur"  value="{{$cast->umur}}"  id="umur" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
             <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="10" cols="30" placeholder="Masukkan bio">{{$cast->bio}}</textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    @endsection