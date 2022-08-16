@extends('layouts.main.index')
@section('content')
    
Администратор
<div class="row">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item">
            <a href="{{route('admin.task.index')}}" class="nav-link">
              <p>
               Задачи
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link">
              <p>
                Категории
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.status.index')}}" class="nav-link">
              <p>
                Статусы
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Пользователи
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
</div>


@endsection