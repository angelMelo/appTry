
<div>
    
    <div class="row">
        <div class="col s12 m12">
            <div class="p-3">
                <h4>Productos</h4>
            </div>
        </div>
        <div class="col s12 m12">
            <div class="p-3">
                <a type="button" class="btn btn-primary btn-lg" href="{{ route('productos.create') }}">Crear producto</a> 
            </div>
        </div>
    </div>

    <div class="row">
        <x-layouts.search/>
    </div>

    <div class="row">

        <div class="col s12 m12">
            <div class="p-3">
                @if($productos->count())
                    <table class="highlight responsive-table">
                        <thead>
                        <tr>
                            <th scope="col">Datos</th>
                            <th scope="col">Datos</th>
                            <th scope="col">Datos</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                
                        <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>
                                <p><b>Total del CFDI</b></p>
                                <p>{{ $producto->cfdi }}</p>
                                <p><b>Estado CFDI</b></p>
                                <p>{{ $producto->cfdis }}</p>
                                <p><b>Efecto del comprobante</b></p>
                                <p>{{ $producto->efecto }}</p>
                                <p><b>Fecha de expedición</b></p>
                                <p>{{ $producto->fechaexp }}</p>
                            </td>
                            <td>
                                <p><b>Fecha certificación SAT</b></p>
                                <p>{{ $producto->fechasat }}</p>
                                <p><b>Folio fiscal</b></p>
                                <p>{{ $producto->foliofiscal }}</p>
                                <p><b>PAC que certificó</b></p>
                                <p>{{ $producto->pac }}</p>
                                <p><b>RFC del emisor</b></p>
                                <p>{{ $producto->rfce }}</p>
                            </td>
                            <td>
                                <p><b>RFC del receptor</b></p>
                                <p>{{ $producto->rfcr }}</p>
                                <p><b>Nombre o razón social del emisor</b></p>
                                <p>{{ $producto->rsocial }}</p>
                                <p><b>Nombre o razón social del receptor</b></p>
                                <p>{{ $producto->rsocialr }}</p>
                                <p><b>Estatus de cancelación</b></p>
                                <p>{{ $producto->status }}</p>
                            </td>
                            <td>
                                <p>
                                    <a class="waves-effect waves-light btn-small blue" role="button" href="{{ route('productos.edit', $producto) }}">Editar</a>
                                </p>
                                <p>
                                    <button type="button" class="waves-effect waves-light btn-small red" wire:click="delete({{$producto}})">Borrar</button>
                                </p>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h4>No se encontraron resultados para la busqueda: {{ $search }}</h4>
                @endif
            </div>
        </div>

        <div class="col s12 m12">
            <ul class="pagination justify-content-center">
                <h5 class="center-align">{{ $productos->links() }}</h5>
            </ul>
        </div>

    </div>

</div>