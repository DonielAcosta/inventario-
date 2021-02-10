@extends("Templade.Templade")

@section("title","Editar")

@section("body")
<h4> Editar Producto</h4>
<div class="row">
			<div class="col-xl-12">
			<form action="{{route('product.update',$product->id)}}" method="post">
				@csrf
				@method("PUT")
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" name="name" required maxlength="50" value="{{$product->name}}"> 
				</div>
				<div class="form-group">
					<label for="date">Fecha</label>
					<input type="text" class="form-control" name="date" required maxlength="50" value="{{$product->date}}">
				</div>
				<div class="form-group">
					<label for="decription">Descripcion</label>
					<input type="text" class="form-control" name="decription" required maxlength="150" value="{{$product->decription}}">
				</div>
				<div class="form-group">
					<label for="id_category">Categoria</label>
					<input type="text" class="form-control" name="id_category" required maxlength="50" value="{{$product->id_category}}">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<input type="reset" class="btn btn-primary" value="Cancelar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>	
			</div>
		</div>
@endsection
