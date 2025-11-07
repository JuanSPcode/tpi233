@extends("layouts.inicio")

@section("main")
    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label>Ingrese el nombre de la categoría</label>
        <input class="form-control" type="text" name="nombrecategoria" value="{{ old('nombrecategoria', $categoria->nombrecategoria) }}">

        <input type="submit" value="Actualizar" class="btn btn-primary">
    </form>
@endsection
