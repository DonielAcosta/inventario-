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
					<input type="text" class="form-control" name="name" required maxlength="50" value="{{$Sub_Stock->name}}">
				</div>
				<div class="form-group">
					<label for="decription">Descripcion</label>
					<input type="text" class="form-control " name="decription" required maxlength="50" value="{{$Sub_Stock->decription}}">
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$Sub_Stock->date}}">
				</div>
				<div class="form-group">
					<label for="id_warehouse">Inventario Deposito </label>
					<select name="id_warehouse" id="id_warehouse" class="form-select" aria-label="Default select example" >
						
						@foreach ($Warehouse as $ware)
						
						<option value="{{ $ware->id }}">{{ $ware->name}}</option>
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
