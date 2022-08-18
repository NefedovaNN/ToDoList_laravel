@extends('layouts.main.index')
@section('content')

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
              <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header">{{$data['taskCount']}}</div>
                  <div class="card-body">
                      <h5 class="card-title">Задачи</h5>
                  </div>
                  <div class="card-footer">
                      <p class="card-text"><a href="{{ route('task.index') }}" class="nav-link">Подробнее</a></p>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Мои данные</div>
                <div class="card-body">
                    <h5 class="card-title">Информация обо мне</h5>
                </div>
                <div class="card-footer">
                    <p class="card-text"><a href="{{ route('task.index') }}" class="nav-link">Подробнее</a></p>
                </div>
            </div>
        </div>
          <div class="col">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$data['categoryCount']}}</div>
                <div class="card-body">
                    <h5 class="card-title">Категории</h5>
                </div>
                <div class="card-footer">
                    <p class="card-text"><a href="{{ route('admin.category.index') }}" class="nav-link">Подробнее</a></p>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
              <div class="card-header">{{$data['statusCount']}}</div>
              <div class="card-body">
                  <h5 class="card-title">Статусы</h5>
              </div>
              <div class="card-footer">
                  <p class="card-text"><a href="{{ route('admin.status.index') }}" class="nav-link">Подробнее
                          </a></p>
              </div>
          </div>
      </div>
      <div class="col">
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$data['userCount']}}</div>
            <div class="card-body">
                <h5 class="card-title">Пользователи</h5>
            </div>
            <div class="card-footer">
                <p class="card-text"><a href="{{ route('admin.user.index') }}" class="nav-link">Подробнее</a></p>
            </div>
        </div>
    </div>

            <!-- ./col -->
</div>

@endsection
