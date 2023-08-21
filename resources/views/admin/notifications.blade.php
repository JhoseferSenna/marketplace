@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
      <a href="{{route('admin.notifications.read.all')}}" class="btn btn-lg btn-success">Marcar Todas Como Lidas!</a>
      <hr>
    </div>
</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Notificação</th>
        <th>Criado em: </th>
        <th>Ações</th>
      </tr>
    </thead>
      <tbody>
        @forelse($unreadNotifications as $notifications)
        <tr>
        <td>{{$notifications->data['message']}}</td>
        <td>{{$notifications->created_at->locale('pt')->diffForHumans()}}</td>
        <td>
          <div class="btn-group">
          <a href="{{route('admin.notifications.read', ['notification' => $notifications->id ] )}}" class="btn btn-sm btn-primary">Marcar como lida</a>
          </div>
        </td>
        </tr>
        @empty
          <tr>
            <td colspan="3">
              <div class="alert alert-warning">Nenhuma Notificação encontrada</div>
            </td>
          </tr>
        @endforelse
      </tbody>
  </table>
  @endsection