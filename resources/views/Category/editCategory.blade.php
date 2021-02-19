@extends("Templade.Templade")

@section("title","Editar")

@section("body")
<h4> Editar </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Category.update',$Category->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50" value="{{$Category->name}}"> 
				</div>
				<div class="form-group">
					<label for="description">Descripción</label>
					<input type="text" class="form-control" name="description" required maxlength="150" value="{{$Category->description}}">
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
