@extends("Templade.Templade")

@section("title","Editar")

@section("body")
<h4> Editar </h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Stock.update',$Stock->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control" name="quantity" id="quantity" required maxlength="150" value="{{$Stock->quantity}}">

					@if ($errors->has('quantity'))
						{{ $errors->first('quantity') }} 
					@endif

				</div>

				<div class="form-group">
					<label for="observation">Observación</label>
					<input type="text" class="form-control" name="observation" id="observation" required maxlength="150" value="{{$Stock->observation}}">

					@if ($errors->has('observation'))
						{{ $errors->first('observation') }}
					@endif
				</div>

				<div class="form-group">
					<label for="id_product">Producto</label>
					<select name="id_product" id="id_product" class="form-select" aria-label="Default select example">
						@foreach ($product as $st)
							<option value="{{$st->id}}"> {{ $st->name }}</option>
						@endforeach

						@if ($errors->has('id_product'))
						{{ $errors->first('id_product') }}
						@endif
					</select>
				</div>

				<div class="form-group">
					<label for="id_sub_stock">Sub Almacén</label>
					<select name="id_sub_stock" id="id_sub_stock" class="form-select" aria-label="Default select example">
						@foreach ($Sub_Stock as $substock)
							<option value="{{ $substock->id }}">{{$substock->name }}
							</option>
						@endforeach
						@if ($errors->has('id_sub_stock'))
						{{ $errors->first('id_sub_stock') }}
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