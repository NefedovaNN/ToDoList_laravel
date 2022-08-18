@extends('layouts.main.index')
@section('content')
    <div class="row">
        <h3>Добавление пользователя</h3>
    </div>
    <div class="row">
        <form class="w-50" action="{{ route('admin.user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control mb-3" name="name" placeholder="Имя пользователя"
                    value="{{ old('name') }}">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label>Выберите роль:</label>
                <select class="form-select form-select-lg mb-3" name="role">
                    @foreach ($roles as $id => $role)
                        <option value="{{ $id }}" {{ $id == old('role_id') ? 'selected' : '' }}>
                            {{ $role }}
                        </option>
                    @endforeach
                </select>
                @error('role')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection
