@extends("Templade.Templade")

@section("title","Create")

@section("body")
<h4> Añadir</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Category.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="description">Descripción</label>
					<input type="text" class="form-control" name="description" required maxlength="150">
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
