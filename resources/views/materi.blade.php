@extends('layouts.app')
@section('title', 'Materi')
@section('content')
<a href="{{route('materi.create')}}">
    <button type="submit" class="btn btn-dark mb-2">Add Materi</button>
</a> </div>

<table class="table table-warning">
    <tr>
        <th>No </th>
        <th>Kategori</th>
        <th>Materi</th>
        <th>gambar</th>
        <th>Action</th>
    </tr>

    @foreach ($materis as $mat)
    @php ($i = $loop->index)
            @php($i++)

    <tr>
        <td>{{ $i }}</td>
        <td>{{ $mat['kategori'] }}</td>
        <td>{{ $mat['materi'] }}</td>
        <td>
            <img src="{{ asset('uploads/materis/'.$mat->materi_image) }}" width="70px" height="70px" alt="image">
        </td>
        <td>
        <div class="d-grid d-md-flex justify-content-left">
            <a href="{{ route('materi.show', $mat->materi_id) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{ route('materi.edit', $mat['materi_id']) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{ route('materi.destroy', $mat['materi_id']) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection
