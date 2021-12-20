@extends('layouts.app')
@section('title','Edit Materi')
@section('content')
<form action="{{route('materi.update', $materi->materi_id)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
        <div class="row">
    
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Edit materi</h1>
            <br>
                <div class="form-group">
                    <label for="" class="label-control">Kategori</label>
                    <input type="text" name="kategori" class="form-control" value = "{{ $materi->kategori }}">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Materi</label>
                    <input type="text" name="materi" class="form-control" value = "{{ $materi->materi }}">
                </div>
                <br>
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
