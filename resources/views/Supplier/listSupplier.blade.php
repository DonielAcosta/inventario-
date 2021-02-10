@extends("Templade.Templade")

@section("title","Supplier Proveedor")

@section("body")
<h3>Proveedor</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Supplier.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Supplier.create')}}" class="btn btn-success">Nuevo</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lx-12">
				<div class="table-reponsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Correo</th>
								<th>Telefono</th>
								<th>Rif</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
						@if(count($Supplier)<=0)
						<tr>
							<td colspan="7"> No hay resultados</td>
						</tr>
						@else
						@foreach($Supplier as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->name}}</td>
								<td>{{$item->last_name}}</td>
								<td>{{$item->email}}</td>
								<td>{{$item->phone}}</td>	
								<td>{{$item->rif}}</td>
								<td>
								<a href="{{route('Supplier.edit', $item->id)}}" class= "btn btn-warning btn-sm">Editar</a>
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" 
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
							@include('Supplier.deleteSupplier')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Supplier->links()}}
				</div>
			</div>
		</div>
@endsection