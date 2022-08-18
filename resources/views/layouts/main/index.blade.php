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
            <div class="collapse navbar-collapse col-12 d-flex justify-content-between align-content-center" id="navbarNav">
              <ul class="navbar-nav ml-3">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('main.index')}}">Мой профиль</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('task.index')}}">Мои задачи</a>
                </li>
                @if(auth()->user()->role == 1)
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.main.index')}}">Кабинет администратора</a>
                </li>
                @endif
                
                
              </ul>
              <ul class="navbar-nav align-items-center">
                <li class="nav-item"><p class="nav-link mb-0">{{auth()->user()->name}}</p> </li>
                <li class="nav-item">
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="border: none; text-align:center;" value="Выйти">
                </form>
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
