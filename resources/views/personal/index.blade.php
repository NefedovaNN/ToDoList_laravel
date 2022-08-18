@extends('layouts.main.index')
@section('content')
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="{{route('main.index')}}">Личный кабинет</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Профиль пользователя</a>
    </li>
  </ul>
    <div class="row mb-5">
        <h3>Профиль пользователя</h3>
    </div>

    <div class="row w-50 ">
        <table class="table table-bordered table table-hover">
            <thead>
                <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">Адрес электронной почты</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>

            </tbody>
        </table>
        <a href="{{route('personal.edit', $user->id)}}" class="btn btn-secondary">Изменить</a>

    </div>
@endsection
