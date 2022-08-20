
@if(session('msg') !== null)
<div class="alert alert-success" role="alert">
  {{session('msg')}}
</div>

    
@endif
@if(session('deleted') !== null)
  <div class="alert alert-danger" role="alert">
    {{session('deleted')}}
  </div>
@endif
