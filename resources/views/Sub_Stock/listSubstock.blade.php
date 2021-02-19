@extends("Templade.Templade")

@section("title","Sub Almacén ")

@section("body")
<h3>Sub Almacén</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Sub_Stock.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit"  class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Sub_Stock.create')}}" class="btn btn-warning"> Nuevo</a>
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
								<th>Descripcion</th>
								<th>Almacen</th>
								<th>Cantidad en Deposito</th>
								<th>Fecha</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						
						<tbody>
						@if(count($Sub_Stock)<=0)
						<tr>
							<td colspan="6"> No hay resultados</td>
						</tr>
						@else
						@foreach($Sub_Stock as $item)
							<tr>
								<td>{{$item->name}}</td>
								<td>{{$item->decription}}</td>
								<td>{{$item->warehouse->name}}</td>
								<td>{{$item->warehouse->quantity}}</td>
								<td>{{$item->date}}</td>
								<td>
								<a href="{{route('Sub_Stock.edit',$item->id)}}" Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
								
								 </td>
							</tr>
							@include('Sub_Stock.deleteSub_Stock')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Sub_Stock->links()}}
				</div>
			</div>
		</div>
@endsection