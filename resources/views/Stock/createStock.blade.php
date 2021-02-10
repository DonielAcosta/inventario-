@extends("Templade.Templade")

@section("title","Create")

@section("body")
<h4> Añadir</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Stock.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control" name="quantity" required maxlength="150">
				</div>
				<div class="form-group">
					<label for="observation">observacion</label>
					<input type="text" class="form-control" name="observation" required maxlength="150">
				</div>
				<div class="form-group">
					<label for="id_product">Producto</label>
					<select name="id_product" id="id_product" class="form-select" aria-label="Default select example">
						@foreach ($product as $st)
							<option value="{{$st->id}}"> {{ $st->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="id_sub_stock">Sub almacen</label>
					<select name="id_sub_stock" id="id_sub_stock" class="form-select" aria-label="Default select example">
						@foreach ($Sub_Stock as $substock)

							<option value="{{ $substock->id }}">{{$substock->name }}
							</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
