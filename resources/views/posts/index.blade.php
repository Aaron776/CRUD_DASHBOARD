@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('CRUD DE POSTS')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <div class="col-12 text-left">
                <a href="{{route('posts.create')}}" class="btn btn-info">Crear Nuevo Post</a>
            </div>
        </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabla Simple</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Titulo
                  </th>
                  <th>
                    Contenido
                  </th>
                  <th>
                    Acciones
                  </th>
                </thead>
                <tbody>
                    @foreach($posteos as $index)
                        <tr>
                            <td>{{$index->id}}</td>
                            <td>{{$index->titulo}}</td>
                            <td>{{$index->contenido}}</td>
                            <td>
                                <form method='post' action="{{ route('posts.destroy',$index->id)}}">
                                    <a href="{{route('posts.edit',$index->id)}}" class="btn btn-warning">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Borrar</button>
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
    </div>
  </div>
</div>
@endsection