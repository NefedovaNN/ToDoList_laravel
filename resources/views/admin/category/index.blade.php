@extends('layouts.main.index')
@section('content')
    <div class="row mb-5">
        <h3>Список категорий:</h3>
    </div>
    <div class="row w-50 ">
        <div class="row w-50 mb-3">
            <a href="{{ route('admin.category.create') }}" class="btn btn-outline-primary">Добавить категорию</a>
        </div>
        <table class="table table-bordered table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название категории</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
