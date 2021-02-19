@extends("Templade.Templade")

@section("title","Almacén  Deposito")

@section("body")
<h3>Almacén  Deposito</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Warehouse.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Warehouse.create')}}" class="btn btn-warning">Nuevo</a>
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
								<th>Cantidad</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Warehouse)<=0)
						<tr>
							<td colspan="3"> No hay resultados</td>
						</tr>
						@else
						@foreach($Warehouse as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->quantity}}</td>
								<td>
								<a href="{{route("Warehouse.edit","$item->id")}}"Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger " data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
								
								 </td>
							</tr>
							@include('Warehouse.deleteWarehouse')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Warehouse->links()}}
				</div>
			</div>
		</div>
@endsection