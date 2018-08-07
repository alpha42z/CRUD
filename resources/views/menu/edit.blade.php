@extends('layouts.base-admin')

@section('title')
    Editar
@endsection

@section('text-title')
    Editar
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/menu">Menu</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal" action="{{ route('menu.update', $menu->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" name="name" value="{{ $menu -> name }}" class="form-control" id="inputEmail3" placeholder="Nome do Menu">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link PT</label>
              <div class="col-sm-10">
                <input type="text" name="slug_pt" value="{{ $menu -> slug_pt }}" class="form-control" id="inputEmail3" placeholder="slug_pt">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link EN</label>
              <div class="col-sm-10">
                <input type="text" name="slug_en" value="{{ $menu -> slug_en }}" class="form-control" id="inputEmail3" placeholder="slug_en">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link CN</label>
              <div class="col-sm-10">
                <input type="text" name="slug_cn" value="{{ $menu -> slug_cn }}" class="form-control" id="inputEmail3" placeholder="slug_cn">
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Salvar">
              <a href="{{ route('menu.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection