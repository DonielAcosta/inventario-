@extends("Templade.Templade")

@section("title","Product")

@section("body")
<h3>Productos</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('product.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('product.create')}}" class="btn btn-warning">Nuevo</a>
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
								<th>Fecha</th>
								<th>Descripción</th>
								<th>Categoria</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($product)<=0)
						<tr>
							<td colspan="5"> No hay resultados</td>
						</tr>
						@else
						@foreach($product as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->date}}</td>
								<td>{{$item->decription}}</td>
								<td>{{$item->category->name}}</td>	
								<td>
								<a href="{{route("product.edit","$item->id")}}" Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger"  data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
								{{-- <form action="{{route("product.destroy","$item->id")}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
									
								</form> --}}
								{{-- este es para eliminar directo sin java --}}
								 </td>
							</tr>
							@include('product.delete')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$product->links()}}
				</div>
			</div>
		</div>
@endsection