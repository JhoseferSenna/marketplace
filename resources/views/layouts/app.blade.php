<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Marketplace</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">Marketplace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @auth
    <ul class="navbar-nav mr-auto">
      <li class="nav-item @if(request()->is('admin/orders*')) active @endif">
        <a class="nav-link" href="{{route('admin.orders.my')}}">Meus Pedidos</a>
      </li>
      <li class="nav-item @if(request()->is('admin/stores*')) active @endif">
        <a class="nav-link" href="{{route('admin.stores.index')}}">Loja<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item @if(request()->is('admin/products*')) active @endif">
        <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
      </li>
      <li class="nav-item @if(request()->is('admin/categories*')) active @endif">
        <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
      </li>
    </ul>
    <div class=" my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a href="{{route('admin.notifications.index')}}" class="nav-link">
        
        <i class="fa fa-bell"><span class="badge badge-danger">{{auth()->user()->unreadNotifications->count()}}</span></i>
      </a>
        </li>
        <li class="nav-item">
          <span class="nav-link">{{auth()->user()->name}}</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit();">Sair</a>
        <form action="{{route('logout')}}" class="logout"  method="POST" style="display: none">
          @csrf
        </form>
        </li>

      </ul>
    </div>
    @endauth
  </div>
</nav>
<body>
  <div class="container">
    @include('flash::message')
    @yield('content')
  </div>
  {{-- <script src="{{asset('js/app.js')}}"></script> --}}

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>