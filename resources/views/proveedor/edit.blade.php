@extends("layouts.inicio")

@section("main")
    <form action="{{ route('proveedor.update', $proveedor->id) }}" method="POST">
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
        <label>Ingrese su nombre del proveedor</label>
        <input class="form-control" type="text" name="nombreproveedor" value="{{ old('nombreproveedor', $proveedor->nombreproveedor) }}">


        <label>Ingrese la direccion del proveedor</label>
        <input type="text" name="direccion" id="direccion"  value="{{ old('direccion', $proveedor->direccion) }}">
        <input type="submit" value="Actualizar" class="btn btn-primary">
    </form>
@endsection