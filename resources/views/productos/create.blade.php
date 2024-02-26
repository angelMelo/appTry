<x-layouts.app title="Crear nuevo producto">

    <div class="row">
        <div class="col s12 m12">
            <div class="p-3">
                <h4>Crear nuevo producto</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <form class="col s12 m12" action="{{ route('productos.store') }}" method="POST">
            <div class="p-3">
                @csrf
                @include('productos.form-fields')            
                <x-layouts.btn-forms/>    
            </div>
        </form>
    </div>

</x-layouts.app>