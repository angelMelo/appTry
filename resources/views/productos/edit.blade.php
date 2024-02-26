
<x-layouts.app :title="$producto->nombre">

    <div class="row">
        <div class="ol-sm-12 col-md-6"">
            <div class="p-3">
                <h4>Editar producto existente</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <form class="col-sm-12 col-md-11" action="{{ route('productos.update', $producto) }}" method="POST">
            <div class="p-3">
                @csrf @method('PATCH')
                @include('productos.form-fields')
                <x-layouts.btn-forms/>
            </div>
        </form>
    </div>

</x-layouts.app>