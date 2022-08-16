@extends('layouts.main.index')
@section('content')
    <div class="row">
        <h3>Задачи</h3>
    </div>

    <div class="card">

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Задача</th>
                        <th scope="col">Комментарий к задаче</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Статус</th>
                        <th colspan="2" scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        @if ($task->importance == 1)
                            <tr style="background-color: brown; color:antiquewhite">
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->content }}</td>
                                <td>{{ $task->category->title }}</td>
                                <td>{{ $task->status->title }}</td>
                            </tr>
                        @else
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->content }}</td>
                                <td>{{ $task->category->title }}</td>
                                <td>{{ $task->status->title }}</td>                               
                                <td><a href="{{route('admin.task.edit', $task->id)}}" class="btn btn-outline-success btn-sm">Изменить</a></td>                                 
                                <td>
                                    <form action="{{route('admin.task.delete', $task->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                   
                </tbody>
            </table>

        </div>
        <div class="card-footer clearfix">
            <a href="{{route('admin.task.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Добавить </a>
        </div>

    </div>
@endsection
