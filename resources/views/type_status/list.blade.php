@extends('layouts.app')
@section('content')

<section class="container">
     <div class="row">
          <article class="col-md-12">
           <form action="{{route('type_status/show')}}" method="post" novalidate class="form-inline">
           @csrf
              <div class="form-group">
                  <label style="margin: 5px">Nombre</label>
                  <input type="text" name="name" class="form-control" required>
              </div>

              <div class="form-group">
                  <button style="margin: 5px" type="submit" class="btn btn-default">Buscar</button>
                  <a  href="{{route('type_status.index')}}" class="btn btn-primary">Todas</a>

                  <a style="margin: 10px" href="{{route('type_status.create')}}" class="btn btn-primary">Crear</a>
              </div>
              </form>
            </article>

            <center>
           <article class="col-md-12">
           <table class="table table-condensed table-striped table-bordered">
             <thead>
                <tr>
                   <th>Nombre</th>
                   <th>Descripcion</th>
                   <th>Id Usuario</th>
                   <th>Id Status</th>

                </tr>
             </thead>
             <tbody>
                @foreach($type_statuses as $type_status)
                 <tr>
                    <td>{{$type_status->name}}</td>
                    <td>{{$type_status->description}}</td>
                    <td>{{$type_status->user_id}}</td>
                    <td>{{$type_status->status_id}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('type_status.edit',['id' => $type_status->id]) }}">Editar</a>
                        <a class="btn btn-danger btn-xs" href="{{route('type_status.destroy',['id' => $type_status->id]) }}">Eliminar</a>
                    </td>
                 </tr>
                 @endforeach
             </tbody>
            </table>
            </article>
            </center>
        </div>

</section>
@endsection
