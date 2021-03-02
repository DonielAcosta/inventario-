@extends("Templade.Templade")

@section("title","Editar")

@section("body")
<h4> Editar </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Sub_Stock.update', $Sub_Stock->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" id="name" required maxlength="50" value="{{$Sub_Stock->name}}">

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif

				</div>
				<div class="form-group">
					<label for="decription">Descripcion</label>
					<input type="text" class="form-control " name="decription" id="decription" required maxlength="50" value="{{$Sub_Stock->decription}}">

					@if ($errors->has('descripcion'))
						{{ $errors->first('descripcion') }}
					@endif

				</div>

				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" id="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$Sub_Stock->date}}">

					@if ($errors->has('date'))
						{{ $errors->first('date') }}
					@endif

				</div>

				<div class="form-group">
					<label for="id_warehouse">Inventario Deposito </label>
					<select name="id_warehouse" id="id_warehouse" class="form-select" aria-label="Default select example" >
						
						@foreach ($Warehouse as $ware)
						
						<option value="{{ $ware->id }}">{{ $ware->name}}</option>
						@endforeach

						@if ($errors->has('id_warehouse'))
						{{ $errors->first('id_warehouse') }}
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
