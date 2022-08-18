@extends('layouts.main.index')
@section('content')
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.category.index') }}">Категории</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Новая категория</a>
            </li>
        </ul>
        <div class="row mb-5">
            <h3>Добавление категории</h3>
        </div>

        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="form-group w-50">
                <label for="title">Введите название категории: </label>
                <input type="text" class="form-control mb-3" name="title" placeholder="Название категории">
            </div>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
@endsection
