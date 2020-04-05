@extends('layouts.app')
@section('content')
<form action="{{route('admin.stores.update', ['store'=>$store->id])}}" method="post">
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
<div class="from-group">
  <label for="">Slug</label>
    <input class="form-control" type="text" name="slug" value="{{$store->slug}}">
  </div>

    <div>
      <button class="btn btn-success my-2" type="submit" >Atualizar Loja</button>
    </div>
  </form>
@endsection