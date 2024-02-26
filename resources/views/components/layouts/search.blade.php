

<div class="row">
    <div class="input-field col s12 m9">
      <span>Buscar</span>
      <input type="text" class="form-control" placeholder="Ingresa tu busqueda.." wire:model.live="search">
    </div>
    <div class="input-field col s8 m3">
      <select class="form-select" wire:model.live="perPage">
        <option value="5">5 por página</option>
        <option value="10">10 por página</option>
        <option value="15">15 por página</option>
        <option value="20">20 por página</option>
      </select>
    </div>
</div>
<div class="row">
  <div class="col s12 m12">  
    <button type="button" class="right waves-effect waves-light btn-small orange" wire:click="clear">Limpiar</button>
  </div>
</div>