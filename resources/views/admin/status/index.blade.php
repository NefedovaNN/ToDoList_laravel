@extends('layouts.main.index')
@section('content')
    <div class="row mb-5">
        <h3>Варианты статуса задачи:</h3>
    </div>
    <div class="row w-50 ">
        <div class="row w-50 mb-3">
            <a href="{{ route('admin.status.create') }}" class="btn btn-outline-primary">Добавить статус</a>
        </div>
        <table class="table table-bordered table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->title }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
