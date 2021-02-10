@extends("Templade.Templade")

@section("title","Create Output")

@section("body")
<h4> Entradas</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Output.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="quantity">Total</label>
					<input type="text" class="form-control" name="quantity" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="text" class="form-control " name="date" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="observation">Observacion</label>
					<input type="text" class="form-control " name="observation" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="id_stock">cod Almacen </label>
					<select name="id_stock" id="id_stock" class="form-select" aria-label="Default select example" >
						
						@foreach ($Stock as $inp)
						<option value="{{ $inp->id }}">{{ $inp->id}}</option>
						@endforeach
					</select>
					
				</div>
				<div class="form-group">
					<label for="id_user">typo usuario</label>
					<select name="id_user" id="id_user" class="form-select" aria-label="Default select example" >
						
						@foreach ($User as $us)
						<option value="{{ $us->id }}">{{ $inp->id}}</option>
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
