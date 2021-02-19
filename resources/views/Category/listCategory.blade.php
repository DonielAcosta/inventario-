@extends("Templade.Templade")

@section("title","Categoria")

@section("body")
 <h3>Categoria</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Category.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
							
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Category.create')}}" class="btn btn-warning">Nuevo</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lx-12">
				<div class="table-reponsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Category)<=0)
						<tr>
							<td colspan="3"> No hay resultados</td>
						</tr>
						@else
						@foreach($Category as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->description}}</td>
								<td><a href="{{route("Category.edit","$item->id")}}" Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger"  data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
							</tr>
						     @include('Category.deleteCategory')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Category->links()}}
				</div>
			</div>
		</div>
@endsection