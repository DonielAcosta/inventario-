@extends("Templade.Templade")

@section("title","Editar Supplier")

@section("body")
<h4> Editar Proveedor </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Supplier.update',$Supplier->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50" value="{{$Supplier->name}}"> 
				</div>
				<div class="form-group">
					<label for="last_name">Apellido</label>
					<input type="text" class="form-control" name="last_name" required maxlength="150" value="{{$Supplier->last_name}}">
				</div>
				<div class="form-group">
					<label for="email">Correo</label>
					<input type="text" class="form-control" name="email" required maxlength="150" value="{{$Supplier->email}}">
				</div>
				<div class="form-group">
					<label for="phone">Telefono</label>
					<input type="text" class="form-control" name="phone" required maxlength="150" value="{{$Supplier->phone}}">
				</div>
				<div class="form-group">
					<label for="rif">Rif</label>
					<input type="text" class="form-control" name="rif" required maxlength="150" value="{{$Supplier->rif}}">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
				
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
