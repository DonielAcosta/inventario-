@extends("Templade.Templade")

@section("title","Create Supplier")

@section("body")
<h4> Nuevos Provedores</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Supplier.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="last_name">Apellido</label>
					<input type="text" class="form-control " name="last_name" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="email">Correo</label>
					<input type="text" class="form-control" name="email" required maxlength="150">
				</div>
				<div class="form-group">
					<label for="phone">Telefono</label>
					<input type="text" class="form-control" name="phone" required maxlength="150">
				</div>
				<div class="form-group">
					<label for="rif">Rif</label>
					<input type="text" class="form-control" name="rif" required maxlength="150">
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
