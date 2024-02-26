

<div class="row">
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="cfdi" class="form-label">Total del CFDI</label>
            <input name="cfdi" id="cfdi" value="{{ old('cfdi', $producto->cfdi)  }}" type="text" class="form-control">
            @error('cfdi')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="cfdis" class="form-label">Estado CFDI</label>
            <input name="cfdis" id="cfdis" value="{{ old('cfdis', $producto->cfdis)  }}" type="text" class="form-control">
            @error('cfdis')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="efecto" class="form-label">Efecto del comprobante</label>
            <input name="efecto" id="efecto" value="{{ old('efecto', $producto->efecto)  }}" type="text" class="form-control">
            @error('efecto')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="fechaexp" class="form-label">Fecha de expedición</label>
            <input name="fechaexp" id="fechaexp" value="{{ old('fechaexp', $producto->fechaexp)  }}" type="date" class="form-control">
            @error('fechaexp')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="fechasat" class="form-label">Fecha certificación SAT</label>
            <input name="fechasat" id="fechasat" value="{{ old('fechasat', $producto->fechasat)  }}" type="date" class="form-control">
            @error('fechasat')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="foliofiscal" class="form-label">Folio fiscal</label>
            <input name="foliofiscal" id="foliofiscal" value="{{ old('foliofiscal', $producto->foliofiscal)  }}" type="text" class="form-control">
            @error('foliofiscal')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="pac" class="form-label">PAC que certificó</label>
            <input name="pac" id="pac" value="{{ old('pac', $producto->pac)  }}" type="text" class="form-control">
            @error('pac')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="rfce" class="form-label">RFC del emisor</label>
            <input name="rfce" id="rfce" value="{{ old('rfce', $producto->rfce)  }}" type="text" class="form-control">
            @error('rfce')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="rfcr" class="form-label">RFC del receptor</label>
            <input name="rfcr" id="rfcr" value="{{ old('rfcr', $producto->rfcr)  }}" type="text" class="form-control">
            @error('rfcr')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="rsocial" class="form-label">Nombre o razón social del emisor</label>
            <input name="rsocial" id="rsocial" value="{{ old('rsocial', $producto->rsocial)  }}" type="text" class="form-control">
            @error('rsocial')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="rsocialr" class="form-label">Nombre o razón social del receptor</label>
            <input name="rsocialr" id="rsocialr" value="{{ old('rsocialr', $producto->rsocialr)  }}" type="text" class="form-control">
            @error('rsocialr')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="input-field col s12 m4">
        <div class="p-1">
            <label for="status" class="form-label">Estatus de cancelación</label>
            <input name="status" id="status" value="{{ old('status', $producto->status)  }}" type="text" class="form-control">
            @error('status')
                    <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

