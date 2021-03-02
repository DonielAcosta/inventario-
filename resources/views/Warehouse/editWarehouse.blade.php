@extends("Templade.Templade")

@section("title","editar ")

@section("body")
<h4> Editar</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Warehouse.update',$Warehouse->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" id="name" required maxlength="50" value="{{$Warehouse->name}}">

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif

				</div>
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control " name="quantity" id="quantity" required maxlength="50" value="{{$Warehouse->quantity}}">

					@if ($errors->has('quantity'))
						{{ $errors->first('quantity') }}
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
