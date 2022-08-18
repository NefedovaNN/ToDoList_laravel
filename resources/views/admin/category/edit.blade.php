@extends('layouts.main.index')
@section('content')
<div class="container">

    <h3>Редактирование категории</h3>
    
        <form action="{{route('admin.category.update', $category->id)}}" method="post">
            @csrf
            @method('Patch')
            <div class="form-group w-50">
              <input type="text" class="form-control mb-3" name="title" placeholder="" value="{{$category->title}}">
            </div>
            @error('title')
              <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Изменить</button>
          </form>
</div>

@endsection