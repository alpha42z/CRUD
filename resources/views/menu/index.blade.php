@extends('layouts.base-admin')

@section('title')
    Menu
@endsection

@section('text-title')
    Menu
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active">Menu</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          @if(session('success'))
          <p class="alert-success justify" style="padding: 5px 10px; width: 230px;">{{ session('success') }}</p>
          @endif
          <a href="{{ route('menu.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus fa-fw"></i>Novo menu</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" id="font-size-12">Posição</th>
                <th scope="col" id="font-size-12">Nome</th>
                <th scope="col" id="font-size-12">Link (pt)</th>
                <th scope="col" id="font-size-12">Link (en)</th>
                <th scope="col" id="font-size-12">Link (cn)</th>
                <th scope="col" id="font-size-12">Ação</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($menus as $menu)
              <tr>
                <td scope="row" id="font-size-12">{{ $menu -> id }}</td>
                <td id="font-size-12">{{ $menu -> name }}</td>
                <td id="font-size-12">{{ $menu -> slug_pt }}</td>
                <td id="font-size-12">{{ $menu -> slug_en }}</td>
                <td id="font-size-12">{{ $menu -> slug_cn }}</td>
                <td>
                  <form class="form-horizontal" action="{{ route('menu.delete', $menu->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <a type="button" href="{{ route('menu.edit', $menu->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> editar</a>
                    <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-times"></i> remover</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
<style>
  #font-size-12 {
    font-size: 12;
  }
</style>