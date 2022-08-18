@extends('layouts.main.index')
@section('content')
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.main.index') }}">Админка</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Пользователи</a>
    </li>
  </ul>
    <div class="row mb-5">
        <h3>Пользователи</h3>
    </div>

    <div class="card">

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Имя пользователя</th>
                        <th scope="col">Электронная почта</th>
                        <th scope="col">Роль пользователя</th>
                        <th colspan="2" scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                      
                            <tr>   
                                <td> {{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{$user->get_roles()["$user->role"]}}</td>
                                <td><a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-outline-success btn-sm">Изменить</a></td>                                 
                                <td>
                                    <form action="{{route('admin.user.delete', $user->id)}}" method="post">
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
            <a href="{{route('admin.user.create')}}" class="btn btn-primary float-right"> Добавить </a>
        </div>

    </div>
@endsection
