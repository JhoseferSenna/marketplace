@extends('layouts.app')
@section('content')
<form action="{{route('admin.stores.update', ['store'=>$store->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="from-group">
  <label for="">Nome Loja</label>
    <input class="form-control" type="text" name="name" value="{{$store->name}}">
  </div>
<div class="from-group">
  <label for="">Descrição</label>
    <input class="form-control" type="text" name="description" value="{{$store->description}}">
  </div>
<div class="from-group">
  <label for="">Telefone</label>
    <input class="form-control" type="text" name="phone" value="{{$store->phone}}">
  </div>
<div class="from-group">
  <label for="">Celular</label>
    <input class="form-control" type="text" name="mobile_phone" value="{{$store->mobile_phone}}">
  </div>

<div class="form-group">
    <p>
    <img src="{{asset('storage/'. $store->logo)}}" alt="" class="img-fluid">
    </p>
    <label for="">Fotos do Produto</label>
    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" multiple>
    @error('logo')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
</div>
    <div>
      <button class="btn btn-success my-2" type="submit" >Atualizar Loja</button>
    </div>
  </form>
@endsection