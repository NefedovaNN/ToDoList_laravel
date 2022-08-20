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
    @include('partials.notifications')
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
                                <td><a href="{{route('task.edit', $task->id)}}" class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                  </svg>
                                </a></td>                                 
                                <td>
                                    <form action="{{route('task.delete', $task->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        
                                        <button type="submit" class="text-danger bg-transparent" style="border: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                              </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                   
                </tbody>
            </table>

        </div>
        <div class="card-footer clearfix">
            <a href="{{route('task.create')}}" class="btn btn-outline-primary float-right">Добавить </a>
        </div>

    </div>
@endsection
