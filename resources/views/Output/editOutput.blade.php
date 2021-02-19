@extends("Templade.Templade")

@section("title","Editar Output")

@section("body")
<h4> Editar </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Output.update',$Output->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="quantity">Total</label>
					<input type="text" class="form-control" name="quantity" required maxlength="50" value="{{$Output->quantity}}">
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$Output->date}}">
				</div>
				<div class="form-group">
					<label for="observation">Observacion</label>
					<input type="text" class="form-control " name="observation" required maxlength="50"value="{{$Output->date}}">
				</div>
				<div class="form-group">
					<label for="id_stock">Codigo Almacén</label>
					<select name="id_stock" id="id_stock" class="form-select" aria-label="Default select example" >
						
						@foreach ($Stock as $inp)
						<option value="{{ $inp->id }}">{{ $inp->id}}</option>
						@endforeach
					</select>
					
				</div>
				<div class="form-group">
					<label for="id_user">Tipo de Usuario</label>
					<select name="id_user" id="id_user" class="form-select" aria-label="Default select example" >
						
						@foreach ($User as $us)
						<option value="{{ $us->id }}">{{ $us->name}}</option>
						@endforeach
					</select>
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Guardar">

					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
