@extends("Templade.Templade")

@section("title","editar Warehouse")

@section("body")
<h4> Editar</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Warehouse.update',$Warehouse->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control " name="quantity" required maxlength="50">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
