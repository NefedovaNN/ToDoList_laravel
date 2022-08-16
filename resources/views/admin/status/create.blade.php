@extends('layouts.main.index')
@section('content')
<div class="container">

    <h3>Добавление статуса</h3>
    
        <form action="{{route('admin.status.store')}}" method="post">
            @csrf
            <div class="form-group w-50">
              <input type="text" class="form-control mb-3" name="title" placeholder="Новый статус">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
          </form>
</div>

@endsection