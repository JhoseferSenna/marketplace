<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Marketplace</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">Marketplace</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @auth
        

    <ul class="navbar-nav mr-auto">
      <li class="nav-item @if(request()->is('admin/stores')) active @endif">
        <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item @if(request()->is('admin/products')) active @endif">
        <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
      </li>
      <li class="nav-item @if(request()->is('admin/categories')) active @endif">
        <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
      </li>
    </ul>
    <div class=" my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
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
</body>
</html>