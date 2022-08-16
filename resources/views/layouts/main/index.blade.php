<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>To Do List</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('personal.main.index')}}">Кабинет пользователя</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('personal.task.index')}}">Задачи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.main.index')}}">Администратор</a>
                      </li>
                    </ul>
                  </div>
               
              </nav>
        </div>
        
        @yield('content')
    
    </div>
    
</body>
</html>
