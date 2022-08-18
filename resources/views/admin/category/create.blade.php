@extends('layouts.main.index')
@section('content')
<div class="container">

    <h3>Добавление категории</h3>
    
        <form action="{{route('admin.category.store')}}" method="post">
            @csrf
            <div class="form-group w-50">
              <label for="title">Введите название категории: </label>
              <input type="text" class="form-control mb-3" name="title" placeholder="Название категории">
            </div>
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Добавить</button>
          </form>
</div>

@endsection