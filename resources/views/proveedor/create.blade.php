@extends("layouts.inicio")

@section("main")
    <form action="{{ route('proveedor.store') }}" method="POST">
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
        <label>Ingrese su nombre del proveedor</label>
        <input class="form-control" type="text" name="nombreproveedor">


        <label>Ingrese la direccion del proveedor</label>
        <input type="text" name="direccion" id="direccion"  >
        <input type="submit" value="Crear" class="btn btn-primary">
    </form>
@endsection