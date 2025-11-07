@extends("layouts.inicio")

@section("main")
    <x-table :key="['id','nombrecategoria']" :data="$data" name="categoria"/>
@endsection