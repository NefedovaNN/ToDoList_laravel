@extends('layouts.main.index')
@section('content')
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.main.index') }}">Админка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Статусы</a>
        </li>
    </ul>
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
                    <th scope="col" colspan="2">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->title }}</td>
                        <td><a href="{{ route('admin.status.edit', $status->id) }}"
                                class="btn btn-outline-success btn-sm">Изменить</a></td>
                        <td>
                            <form action="{{ route('admin.status.delete', $status->id) }}" method="post">
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
