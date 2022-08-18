@extends('layouts.main.index')
@section('content')
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.category.index') }}">Категории</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Изменение категории</a>
        </li>
    </ul>

    <div class="row mb-5">
        <h3>Редактирование категории</h3>
    </div>

    <form action="{{ route('admin.category.update', $category->id) }}" method="post">
        @csrf
        @method('Patch')
        <div class="form-group w-50">
            <input type="text" class="form-control mb-3" name="title" placeholder="" value="{{ $category->title }}">
        </div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection
