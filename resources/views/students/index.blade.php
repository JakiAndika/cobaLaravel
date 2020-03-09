@extends('layout.main')

@section('title', 'Daftar Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            @foreach ($students as $student)
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
                </li>
            </ul>
            @endforeach
        </div>

    </div>
</div>
</div>
@endsection
