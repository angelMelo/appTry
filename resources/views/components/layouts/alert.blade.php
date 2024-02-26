
@if(session('status'))
    <div>
        <h4 class="right-align red-text text-darken-2">{{ session('status')}}</h4>
    </div>
@endif