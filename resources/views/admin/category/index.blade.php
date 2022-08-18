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
                    <th scope="col" colspan="2">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td><a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-outline-success btn-sm">Изменить</a></td>
                        <td>
                            <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                            </form>
                        </td>  
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
