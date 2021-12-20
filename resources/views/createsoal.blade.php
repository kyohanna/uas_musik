@extends('layouts.app')
@section('title','Create Soal')
@section('content')
<form action="{{route('materi.store')}}" method="post">
    @csrf
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Create New Soal</h1>
                <div class="form-group">
                    <label for="" class="label-control">Soal</label>
                    <input type="text" name="soal" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Pil A</label>
                    <input type="text" name="pila" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Pil B</label>
                    <input type="text" name="pilb" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Pil C</label>
                    <input type="text" name="pilc" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Pil D</label>
                    <input type="text" name="pild" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="" class="label-control">Kunci</label>
                    <input type="text" name="kunci" class="form-control">
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