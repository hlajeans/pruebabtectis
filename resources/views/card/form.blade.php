<h1>{{$modo}} Tarjeta</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif

<div class="form-group">
<label for="Nombre"> Titulo*</label>
<input type= "text" class="form-control" name="Nombre" id="Nombre" value="{{isset($gp->Nombre)? $gp->Nombre:old('Nombre')}}">
</div>

<div class="form-group">
<label for="NombreCorto"> Descripcion</label>
<input type= "text" class="form-control" name="NombreCorto" id="NombreCorto" value="{{isset($gp->NombreCorto)? $gp->NombreCorto:old('NombreCorto')}}">
</div>

<input type= "submit" class="btn btn-dark"value="{{$modo}} datos">

<a href="{{url('/grupoempresa')}}" class="btn btn-secondary">Regresar</a>
<br/>