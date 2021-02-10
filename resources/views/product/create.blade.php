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
					<input type="text" class="form-control" name="name" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="text" class="form-control " name="date" required maxlength="50">
				</div>
				<div class="form-group">
					<label for="decription">Descripcion</label>
					<input type="text" class="form-control" name="decription" required maxlength="150">
				</div>
				<div class="form-group">
					<label for="id_category">Categoria</label>
					<select name="id_category" id="id_category">

						@foreach ($Categories as $Categ)
							<option value="{{$Categ->id }}">{{$Categ->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<input type="reset" class="btn btn-default" value="Cancelar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection


