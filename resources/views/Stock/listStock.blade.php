@extends("Templade.Templade")

@section("title","Stock")

@section("body")
<h3>Almacén</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Stock.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Stock.create')}}" class="btn btn-warning">Nuevo</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lx-12">
				<div class="table-reponsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Productos</th>
								<th>Fecha de Ingreso</th>
								<th>Cantidad</th>
								<th>Observación</th>
								<th>Opciones</th>	
							</tr>
						</thead>
						<tbody>
						@if(count($Stock)<=0)
						<tr>
							<td colspan="5"> No hay resultados</td>
						</tr>
						@else
						@foreach($Stock as $item)
							<tr>
								<td>{{$item->product->name}}</td>
								<td>{{$item->sub_stock->date}}</td>
								<td>{{$item->quantity}}</td>
								<td>{{$item->observation}}</td>
								<td>
								<a href="{{route('Stock.edit',$item->id)}}"Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger"  data-bs-toggle="modal" 
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