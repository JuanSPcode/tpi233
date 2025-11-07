@extends("layouts.inicio")

@section("main")
    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
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
        <input class="form-control" type="text" name="nombrecategoria">

        <input type="submit" value="Crear" class="btn btn-primary">
    </form>
@endsection
