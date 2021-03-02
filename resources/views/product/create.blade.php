@extends("Templade.Templade")

@section("title","Create")

@section("body")
<h4> Nuevos Productos</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('product.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" id="name" required maxlength="50" value="{{$product->name}}"> 
					
					@if ($errors->has('name'))
						{{ $errors->first('name') }}
					@endif
				</div>

				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="date" class="form-control" name="date" id="date" class="datepicker" data-date-format="mm/dd/yyyy" required maxlength="50" value="{{$product->date}}">

					@if ($errors->has('date'))
						{{ $errors->first('date') }}
					@endif
				</div>

				<div class="form-group">
					<label for="decription">Descripción</label>
					<input type="text" class="form-control" name="decription" id="decription" required maxlength="150" value="{{$product->decription}}">

					@if ($errors->has('descripción'))
						{{ $errors->first('decription') }}
					@endif

				</div>


				<div class="form-group">
					<label for="id_category">Categoria</label>
					<select name="id_category" id="id_category" class="form-select" aria-label="Default select example">
						@foreach ($Categories as $Categ)
							<option value="{{$Categ->id }}">{{$Categ->name}}</option>
						@endforeach

						@if ($errors->has('id_category'))
						{{ $errors->first('id_category') }}
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


