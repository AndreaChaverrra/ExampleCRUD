@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('category/update', ['id' => $category->id])}}" method="post" novalidate>
                @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$category->name}}">
                    </div>

                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" required value="{{$category->descripcion}}">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-succes">Enviar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>

@endsection
