@props(["key"=>[], "data"=>[], "name"=>""])

<table class="table">
    <thead>
        <tr>
            @foreach ($key as $header)
                <th>{{ $header }}</th>
            @endforeach
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $row)
            <tr>
                @foreach ($key as $keys )
                    <td>{{ $row->$keys }}</td>
                @endforeach
                <td>
                    <a class="btn btn-info" href="{{ route("$name.edit", $row->id) }}">Editar</a>
                    <form action="{{ route("$name.destroy", $row->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="{{ count($key) }}">
                    Sin datos aun agregados
                </td>
            </tr>
        @endforelse
    </tbody>
</table>