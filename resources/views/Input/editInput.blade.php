@extends("Templade.Templade")

@section("title","Editar  ")

@section("body")
<h4> Editar </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Input.update',$Input->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="whole">Total</label>
					<input type="text" class="form-control" name="whole" id="whole" required maxlength="50" value="{{$Input->whole}}">

						@if ($errors->has('whole'))
							{{ $errors->first('whole') }}
						@endif
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" id="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$Input->date}}">


						@if ($errors->has('date'))
							{{ $errors->first('date') }}
						@endif
				</div>
				<div class="form-group">
					<label for="n_invoice"> Numero de Factura</label>
					<input type="text" class="form-control " name="n_invoice" id="n_invoice" required maxlength="50" value="{{$Input->n_invoice}}">

						@if ($errors->has('n_invoice'))
							{{ $errors->first('n_invoice') }}
						@endif
				</div>
				<div class="form-group">
					<label for="id_supplier">Proveedor</label>
					<select name="id_supplier" id="id_supplier" class="form-select" aria-label="Default select example">
						
						@foreach ($supplier as $inp)
						<option value="{{ $inp->id }}">{{ $inp->name }}</option>
						@endforeach

						@if ($errors->has('id_supplier'))
							{{ $errors->first('id_supplier') }}
						@endif
					</select>
					
				</div>
				<div class="form-group">
					<label for="id_user">Usuario</label>
					<select name="id_user" id="id_user" class="form-select" aria-label="Default select example" value="{{$Input->name}}">

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
