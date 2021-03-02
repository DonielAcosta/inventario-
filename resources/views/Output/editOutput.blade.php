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
					<input type="text" class="form-control" name="quantity" id="quantity" required maxlength="50" value="{{$Output->quantity}}">

					@if ($errors->has('quantity'))
						{{ $errors->first('quantity') }}
					@endif

				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" id="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$Output->date}}">

					@if ($errors->has('date'))
						{{ $errors->first('date') }}
					@endif

				</div>
				<div class="form-group">
					<label for="observation">Observacion</label>
					<input type="text" class="form-control " name="observation" id="observation" required maxlength="50"value="{{$Output->date}}">


					@if ($errors->has('observation'))
						{{ $errors->first('observation') }}
					@endif

				</div>
				<div class="form-group">
					<label for="id_stock">Codigo Almacén</label>
					<select name="id_stock" id="id_stock" class="form-select" aria-label="Default select example" >
						
						@foreach ($Stock as $inp)
						<option value="{{ $inp->id }}">{{ $inp->id}}</option>
						@endforeach

						@if ($errors->has('id_stock'))
							{{ $errors->first('id_stock') }}
						@endif


					</select>
					
				</div>
				<div class="form-group">
					<label for="id_user">Tipo de Usuario</label>
					<select name="id_user" id="id_user" class="form-select" aria-label="Default select example" >
						
						@foreach ($User as $us)
						<option value="{{ $us->id }}">{{ $us->name}}</option>
						@endforeach

						@if ($errors->has('id_user'))
							{{ $errors->first('id_user') }}
						@endif
					</select>
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-info" value="Guardar">

					<a href="javascript:history.back()">Volver</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
