
<div>
    <div class="row">
        <div class="section" id="parte2">
            <br><br>
            <div class="row">        
                <a class="nav-link" href="{{ route('home') }}"><i class="material-icons">home</i></a>
                <i class="material-icons">keyboard_arrow_right</i>
                Inicio
            </div>
        </div>

        <div class="section">
            <div class="row">
                <img src="https://verificacfdi.facturaelectronica.sat.gob.mx/Content/images/Logo_SHCP_SAT-.jpg">
            </div>
            <div class="row">
                <h5><b>Verificación de comprobantes fiscales digitales por internet</b></h5>
            </div>
            <br><br>
        </div>
        
        <div class="section" id="parte3">
        
            <!--   Icon Section   -->
            <div class="row">
                <div>
                    <h6><b>A través de esta opción, usted podrá verificar si el comprobante fue certificado por el SAT</b></h6>
                </div>
                <div style="display: none">
                    {{ $this->search = request()->query('search') }}
                </div>
            </div>
        
            <div class="row">
                <form class="col s12" wire:submit.prevent="searchProduct">
                    <div class="row">
                        <div class="input-field col s12 m4">
                            <b>Folio fiscal*: </b>
                            <input type="text" value="{{ $this->search }}" wire:model="search">
                        </div>
                        <div class="input-field col s12 m4">
                            <b>RFC emisor*: </b>
                            <input type="text" value="2YTF1DTRF98GJ2JHGJ2GG1">
                        </div>
                        <div class="input-field col s12 m4">
                            <b>RFC receptor*: </b>
                            <input type="text" value="GJ2JHGJ2GG12YTF1DTRF98">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m4">
                            <img width="190" src="https://i.stack.imgur.com/v7b3L.png"/><p>
                        </div>
                        <div class="input-field col s12 m4">
                            <b>Proporcione los dígitos de la imagen*: </b>
                            <input type="text" value="UPORD">
                        </div>
                        <div class="col s12 m4">      
                            <button class="right btn-large waves-effect waves-light blue" type="submit">Verificar CFDI</button>    
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="section">

            <div class="row">
                <div class="col s12 m12">
                    @if(isset($productos))
                    <table class="striped responsive-table">
                        <thead>
                          <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <p><h6><b>RFC del emisor</b></h6></p>
                                <p><h6>{{$productos->rfce}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Nombre o razón social del emisor</b></h6></p>
                                <p><h6>{{$productos->rsocial}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>RFC del receptor</b></h6></p>
                                <p><h6>{{$productos->rfcr}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Nombre o razón social del receptor</b></h6></p>
                                <p><h6>{{$productos->rsocialr}}</h6></p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <p><h6><b>Folio fiscal</b></p>
                                <p><h6>{{$productos->foliofiscal}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Fecha de expedición</b></h6></p>
                                <p><h6>{{$productos->fechaexp}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Fecha certificación SAT</b></h6></p>
                                <p><h6>{{$productos->fechasat}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>PAC que certificó</b></h6></p>
                                <p><h6>{{$productos->pac}}</h6></p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <p><h6><b>Total del CFDI</b></h6></p>
                                <p><h6>{{$productos->cfdi}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Efecto del comprobante</b></h6></p>
                                <p><h6>{{$productos->efecto}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Estado CFDI</b></h6></p>
                                <p><h6>{{$productos->cfdis}}</h6></p>
                            </td>
                            <td>
                                <p><h6><b>Estatus de cancelación</b></h6></p>
                                <p><h6>{{$productos->status}}</h6></p>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                    <div>
                        <button class="right btn-large waves-effect waves-light blue" onClick="window.print()">Imprimir</button>
                    </div>
                    @elseif(isset($error))
                    <p><b>* Datos obligatorios </b></p>
                    @else
                    <p><h5>Sin datos que mostrar</h5></p>
                    @endif
                </div>
            </div>
        </div> <!-- section -->
    </div>
</div>
</div>