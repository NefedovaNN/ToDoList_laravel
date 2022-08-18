@extends('layouts.main.index')
@section('content')
<div class="container">

    <h3>Редактирование статуса</h3>
    
        <form action="{{route('admin.status.update', $status->id)}}" method="post">
            @csrf
            @method('Patch')
            <div class="form-group w-50">
              <input type="text" class="form-control mb-3" name="title" placeholder="" value="{{$status->title}}">
            </div>
            @error('title')
              <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Изменить</button>
          </form>
</div>

@endsection