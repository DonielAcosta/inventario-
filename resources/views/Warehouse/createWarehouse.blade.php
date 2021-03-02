@extends("Templade.Templade")

@section("title","Almacén  Deposito")

@section("body")
<h4> Entradas</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Warehouse.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" id="name" required maxlength="50">

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif

				</div>
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control " name="quantity" required maxlength="50">

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif

				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Guardar">
					<a href="javascript:history.back()">Volver</a>
				</div>
				
			</form>	
			</div>
		</div>
@endsection
