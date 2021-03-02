@extends("Templade.Templade")

@section("title","Create")

@section("body")
<h4> Añadir</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Category.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" id="name" required maxlength="50" value="{{$Category->name}}"> 

					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif
				</div>
				<div class="form-group">
					<label for="description">Descripción</label>
					<input type="text" class="form-control" name="description" id="description" required maxlength="150" value="{{$Category->description}}">
					@if ($errors->has('description'))
						{{ $errors->first('description') }}
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
