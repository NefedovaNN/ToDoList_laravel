@extends('layouts.main.index')

@section('content')
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="{{route('main.index')}}">Личный кабинет</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Задачи</a>
    </li>
  </ul>
    <div class="row">
        <h3>Задачи</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table ">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col">Задача</th>
                        <th scope="col">Комментарий к задаче</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Статус</th>
                        <th colspan="2" scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                      
                            <tr class="{{$task->status->title == 'Завершена' ? 'text-decoration-line-through text-muted':''}}">   
                                <td >
                                     @if($task->importance == 1)
                                     <span class="badge bg-danger">Важно!</span>
                           
                                     @endif
                                </td>
                                
                               
                                <td> {{ $task->title }}</td>
                                <td> {{ $task->content }} </td>
                                <td>{{ $task->category->title }}</td>
                                <td>{{ $task->status->title }}</td>                               
                                <td><a href="{{route('task.edit', $task->id)}}" class="btn btn-outline-success btn-sm">Изменить</a></td>                                 
                                <td>
                                    <form action="{{route('task.delete', $task->id)}}" method="post">
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
        <div class="card-footer clearfix">
            <a href="{{route('task.create')}}" class="btn btn-primary float-right">Добавить </a>
        </div>

    </div>
@endsection
