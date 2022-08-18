@extends('layouts.main.index')
@section('content')
    
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="{{route('personal.index')}}">Профиль пользователя</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Редактирование профиля</a>
    </li>
  </ul>
  <div class="row mb-5">
    <h3>Редактирование информации пользователя</h3>
  </div>


    <div class="row">
        <form class="w-50" action="{{ route('personal.update', $user->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <input type="text" class="form-control mb-3" name="name" placeholder="Имя пользователя"
                    value="{{ $user->name }}">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    value="{{ $user->email }}" aria-describedby="emailHelp">
            </div>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror

    </div>

    <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
    </div>
@endsection
