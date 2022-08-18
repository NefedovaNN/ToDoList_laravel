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
  <div class="row mb-5">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-3">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('main.index')}}">Мой профиль</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('task.index')}}">Мои задачи</a>
                </li>
              </ul>
            </div>
          </div>
         
        </nav>
  </div>
    <div class="container">
       
        
        @yield('content')
    
    </div>
    
</body>
</html>
