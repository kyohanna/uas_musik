@extends('layouts.app')
@section('title','Create Materi')
@section('content')
<form action="{{route('materi.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Create New Materi</h1>
                <div class="form-group">
                    <label for="" class="label-control">Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Materi</label>
                    <input type="text" name="materi" class="form-control">
                </div>
    
                {{-- <div class="form-group">
                    <label for="" class="label-control">Image</label>
                    <input name="image" class="form-control">
                </div> --}}
                <br>
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
        
@endsection