@extends("Templade.Templade")

@section("title","Create input")

@section("body")
<h4> Entradas</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Input.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="whole">Total</label>
					<input type="text" class="form-control" name="whole" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="text" class="form-control " name="date" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="n_invoice"> Numero de Factura</label>
					<input type="text" class="form-control " name="n_invoice" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="id_supplier">Proveedor </label>
					<select name="id_supplier" id="id_supplier" class="form-select" aria-label="Default select example" >
						
						@foreach ($supplier as $inp)

						<option value="{{ $inp->id }}">{{ $inp->name}}</option>
						@endforeach
					</select>
					
				</div>
				<div class="form-group">
					<label for="id_user">Usuario</label>
					<select name="id_user" id="id_user" class="form-select" aria-label="Default select example">

						@foreach ($User as $us)
							<option value="{{ $us->id }}">{{ $us->name}}</option>
						@endforeach
					</select>	
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
