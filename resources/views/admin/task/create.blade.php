@extends('layouts.main.index')
@section('content')
<div class="row">
    <h3>Добавление задачи</h3>
</div>
<div class="row">
    <form class="w-50" action="{{route('admin.task.store')}}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control mb-3" name="title" placeholder="Заголовок задачи" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <textarea type="text" class="form-control mb-3" name="content" placeholder="Комментарий к задаче">{{old('content')}}</textarea>
          </div>
          <div class="form-group">
            <label>Выберите категорию:</label>
              <select class="form-select form-select-lg mb-3" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
              </select>
          </div>
         
            <div class="form-check">
              <input class="form-check-input" name='importance' type="checkbox" value = "" >
              <label class="form-check-label" >
                Срочно
              </label>
            </div>
          
          <input type="hidden" name="status_id" value="{{1}}">
        <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
</div>


@endsection