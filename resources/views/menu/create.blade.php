@extends('layouts.base-admin')

@section('title')
    Novo
@endsection

@section('text-title')
    Novo
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/menu">Menu</a></li>
    <li class="breadcrumb-item active">Novo</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal" action="{{ route('menu.create') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-6">
                <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Nome do Menu">
              </div>
            </div>
             <div class="form-group col-sm-6">
              <label for="submenu">Submenu</label>
              <select class="form-control" id="submenu">
                <option>- novo menu -</option>
                @foreach ($menus as $menu)
                <option>{{ $menu -> name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group" style="margin-left: 20px; font-size: 14px;">
            * não preencher os links se esse for um menu com submenus.</div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link PT</label>
              <div class="col-sm-6">
                <input name="slug_pt" type="text" class="form-control" id="inputEmail3" placeholder="slug_pt">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link EN</label>
              <div class="col-sm-6">
                <input name="slug_en" type="text" class="form-control" id="inputEmail3" placeholder="slug_en">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Link CN</label>
              <div class="col-sm-6">
                <input name="slug_cn" type="text" class="form-control" id="inputEmail3" placeholder="slug_cn">
              </div>
            </div>
          </div>
          <div class="card-footer clearfix">
            <input type="submit" class="btn btn-primary" value="Salvar">
            <!--  ARRUMAR ISSO AQUI
            if submenu != '- novo menu -', parent_id = id;
            else parent_id = id do name -->
            <a href="{{ route('menu.index') }}" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection