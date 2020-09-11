@extends('layouts.app')
@section('content')

<section class="container">
     <div class="row">
          <article class="col-md-12">
           <form action="{{route('status/show')}}" method="post" novalidate class="form-inline">
           @csrf
              <div class="form-group">
                  <label style="margin: 5px">Nombre</label>
                  <input type="text" name="name" class="form-control" required>
              </div>

              <div class="form-group">
                  <button style="margin: 5px" type="submit" class="btn btn-default">Buscar</button>
                  <a  href="{{route('status.index')}}" class="btn btn-primary">Todas</a>

                  <a style="margin: 10px" href="{{route('status.create')}}" class="btn btn-primary">Crear</a>
              </div>
              </form>
            </article>

           <article class="col-md-12">
           <table class="table table-condensed table-striped table-bordered">
             <thead>
                <tr>
                   <th>Nombre</th>
                   <th>Descripcion</th>
                   <th>Id User</th>
                   <th>Id Status</th>

                </tr>
             </thead>
             <tbody>
                @foreach($statuses as $status)
                 <tr>
                    <td>{{$status->name}}</td>
                    <td>{{$status->description}}</td>
                    <td>{{$status->user_id}}</td>
                    <td>{{$status->status_id}}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{route('status.edit',['id' => $status->id]) }}">Editar</a>
                        <a class="btn btn-danger btn-xs" href="{{route('status.destroy',['id' => $status->id]) }}">Eliminar</a>
                    </td>
                 </tr>
                 @endforeach
             </tbody>
            </table>
            </article>

        </div>

</section>
@endsection
