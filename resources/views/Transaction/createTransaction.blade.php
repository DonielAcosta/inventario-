@extends("Templade.Templade")

@section("title","Create Transaction")

@section("body")
<h4> Transaction</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('Transaction.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="quantity">Cantidad</label>
					<input type="text" class="form-control" name="quantity" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="price">Precio</label>
					<input type="text" class="form-control " name="price" required maxlength="50">
				<div class="form-group">
					<label for="id_product">Producto </label>
					<select name="id_product" id="id_product" class="form-select" aria-label="Default select example" >
						@foreach ($Product as $prod)

						<option value="{{ $prod->id }}">{{ $prod->name}}</option>
						@endforeach
					</select>
					
				</div>
				<div class="form-group">
					<label for="id_stock">Stock</label>
					<select name="id_stock" id="id_stock" class="form-select" aria-label="Default select example">

						@foreach ($Stock as $st)
							<option value="{{ $st->id }}">{{ $st->id}}</option>
						@endforeach
					</select>	
				</div>
				<div class="form-group">
					<label for="id_input">Entrada</label>
					<select name="id_input" id="id_input" class="form-select" aria-label="Default select example">

						@foreach ($Input as $in)
							<option value="{{ $in->id }}" >{{$in->id}}</option>
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