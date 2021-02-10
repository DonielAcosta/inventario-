@extends("Templade.Templade")

@section("title","Stock")

@section("body")
<h3>Almacen</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Stock.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Stock.create')}}" class="btn btn-success">Nuevo</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lx-12">
				<div class="table-reponsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id </th>
								<th>Observación</th>
								<th>Cantidad</th>
								<th>id_product</th>
								<th>id_sub_stock</th>
								<th>Opciones</th>	
							</tr>
						</thead>
						<tbody>
						@if(count($Stock)<=0)
						<tr>
							<td colspan="6"> No hay resultados</td>
						</tr>
						@else
						@foreach($Stock as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->observation}}</td>
								<td>{{$item->quantity}}</td>
								<td>{{$item->id_product}}</td>
								<td>{{$item->id_sub_stock}}</td>
								<td>
								<a href="{{route('Stock.edit',$item->id)}}"Class= "btn btn-warning btn-sm">Editar</a>
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
								
								 </td>
							</tr>
							@include('Stock.deleteStock')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Stock->links()}}
				</div>
			</div>
		</div>
@endsection