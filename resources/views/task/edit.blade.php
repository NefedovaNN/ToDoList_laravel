@extends('layouts.main.index')
@section('content')
    <div class="row">
        <h3>Редактирование задачи</h3>
    </div>
    <div class="row">
        <form class="w-50" action="{{ route('task.update', $task->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <input type="text" class="form-control mb-3" name="title" placeholder="Заголовок задачи"
                    value="{{ $task->title }}">
            </div>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <textarea type="text" class="form-control mb-3" name="content" placeholder="Комментарий к задаче">{{ $task->content }}</textarea>
            </div>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label>Выберите категорию:</label>
                <select class="form-select form-select-lg mb-3" name="category_id">
                    @foreach ($categories as $category)
                        <option {{ $category->id == $task->category->id ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>Изменить статус:</label>
                <select class="form-select form-select-lg mb-3" name="status_id">
                    @foreach ($statuses as $status)
                        <option {{ $status->id == $task->status->id ? 'selected' : '' }} value="{{ $status->id }}">
                            {{ $status->title }}</option>
                    @endforeach
                </select>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" name='importance' id='importance' type="checkbox" value="1"
                    @if ($task->importance == 1) checked="checked" @endif>
                <label class="form-check-label">
                    Срочно
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
