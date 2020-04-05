@extends('layouts.app')
@section('content')
<form action="{{route('admin.stores.store')}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="from-group">
  <label for="">Nome Loja</label>
    <input class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" type="text" name="name">
    @error('name')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
<div class="from-group">
  <label for="">Descrição</label>
    <input class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" type="text" name="description">
        @error('description')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
<div class="from-group">
  <label for="">Telefone</label>
    <input class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" type="text" name="phone">
        @error('phone')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
<div class="from-group">
  <label for="">Celular</label>
    <input class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}" type="text" name="mobile_phone">
        @error('mobile_phone')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
<div class="from-group">
  <label for="">Slug</label>
    <input class="form-control" type="text" name="slug">
  </div>

    <div>
      <button class="btn btn-success my-2" type="submit" >Criar Loja</button>
    </div>
  </form>
@endsection