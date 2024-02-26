
<x-layouts.app title="Login">

<div class="row">
    <h3 class="center-align">Login</h3>
</div>

<div class="row">
    <div class="col s12 m3"></div>
    <div class="col s12 m6">
      <form class="col s12" action="{{ route('loginSucess')}}" method="POST">
        @csrf
        <div class="row">
          <div class="input-field col s12 m12">
              <b>Usuario: </b>
              <input type="text" name="email">
              @error('email')
                  <small style="color: red">{{ $message }}</small>
              @enderror
          </div>
          <div class="input-field col s12 m12">
              <b>Contraseña: </b>
              <input type="password" name="password">
              @error('password')
              <small style="color: red">{{ $message }}</small>
              @enderror
          </div>
          <div class="input-field col s12 m2">
            <p>
              <label>
                <input type="checkbox" name="remember"/>
                <span>Recordarme</span>
              </label>
            </p>
          </div>
          <div class="col s12 m12">      
            <p>    
            <button class="right btn-large waves-effect waves-light blue" type="submit" name="action">Login</button>
            </p>
          </div>
        </div>
      </form>
    </div>
    <div class="col s12 m3"></div>
</div>
  
</x-layouts.app>