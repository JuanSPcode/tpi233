@extends("layouts.inicio")

@section("main")
    <x-table :key="['id','direccion', 'nombreproveedor']" :data="$data" name="proveedor"/>
@endsection