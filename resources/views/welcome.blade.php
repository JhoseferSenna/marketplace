@extends('layouts.front')
@section('content')
<div class="container">
    <div class="card-deck mb-2">
    @foreach($products as $key  => $product)
        <div class="card ">
          @if($product->photos->count())
          <img src="{{asset('storage/'. $product->photos->first()->image)}}" alt="" class="card-img-top">
          @else
          <img src="{{asset('assets/img/no-photo.jpg')}}" alt="" class="card-img-top">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
          </div>
          <div class="card-footer">
            <h3 class="float-right">R$ {{number_format($product->price, '2', ',', '.')}}</h3>
            <a href="{{route('product.single', ['slug' => $product->slug])}}" class="btn btn-success">Ver Produto</a>
          </div>
        </div>
    @if(($key + 1) % 3 == 0) </div> <div class="card-deck mb-2 front">@endif
    @endforeach
  </div>
  <div class="row">
    <div class="col-12">
      <h2>Lojas Destaque</h2>
    </div>
  @foreach ($stores as $store)
    <div class="col-4">
      @if ($store->logo)
      <img src="{{asset('storage/' . $store->logo)}}" alt="Logo da loja {{$store->name}}" class="img-fluid"> 
      @else
      <img src="https://via.placeholder.com/450X100.png?text=logo" alt="Loja sem logo" class="img-fluid">
      @endif

    <h3>{{$store->name}}</h3>
      <p>{{$store->description}}</p>
    <a href="{{route('store.single', ['slug' => $store->slug])}}" class="btn btn-sm btn-success">Ver Loja</a>
    </div>

  @endforeach
  </div>
</div>
@endsection
