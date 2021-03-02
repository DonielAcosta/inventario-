@extends("Templade.Templade")

@section("title","Editar Supplier")

@section("body")
<h4> Editar Proveedor </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Supplier.update',$Supplier->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name"  id ="name" required maxlength="50" value="{{$Supplier->name}}"> 

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif
				</div>

				<div class="form-group">
					<label for="last_name">Apellido</label>
					<input type="text" class="form-control" name="last_name" id="last_name" required maxlength="150" value="{{$Supplier->last_name}}">

					@if ($errors->has('last_name'))
						{{ $errors->first('last_name') }}
					@endif
				</div>
				<div class="form-group">
					<label for="email">Correo</label>
					<input type="text" class="form-control" name="email" id="email" required maxlength="150" value="{{$Supplier->email}}">

					@if ($errors->has('email'))
						{{ $errors->first('email') }}
					@endif

				</div>
				<div class="form-group">
					<label for="phone">Teléfono</label>
					<input type="text" class="form-control" name="phone" id="phone" required maxlength="150" value="{{$Supplier->phone}}">

					@if ($errors->has('phone'))
						{{ $errors->first('phone') }}
					@endif

				</div>
				<div class="form-group">
					<label for="rif">Rif</label>
					<input type="text" class="form-control" name="rif" id="rif" required maxlength="150" value="{{$Supplier->rif}}">

					@if ($errors->has('rif'))
						{{ $errors->first('rif') }}
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
