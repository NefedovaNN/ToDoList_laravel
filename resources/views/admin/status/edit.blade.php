@extends('layouts.main.index')
@section('content')

<ul class="nav justify-content-end">
  <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.status.index') }}">Статусы</a>
  </li>
  <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Изменение статуса</a>
  </li>
</ul>
<div class="row mb-5">
  <h3>Редактирование статуса</h3>
</div>
    
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