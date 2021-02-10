@extends("Templade.Templade")

@section("title","Output")

@section("body")
 <h3>Salidas</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Output.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
							
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Output.create')}}" class="btn btn-success">Nuevo</a>
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
								<th>Cantidad</th>
								<th>Fecha</th>
								<th>Observacion</th>
								<th>id_Almacen</th>
								<th>id_usuario</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Output)<=0)
						<tr>
							<td colspan="5"> No hay resultados</td>
						</tr>
						@else
						@foreach($Output as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->quantity}}</td>
								<td>{{$item->date}}</td>
								<td>{{$item->observation}}</td>
								<td>{{$item->id_stock}}</td>
								<td>{{$item->id_user}}</td>

								<td><a href="{{route("Output.edit","$item->id")}}"Class= "btn btn-warning btn-sm">Editar</a>
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
							</tr>
						     @include('Output.deleteOutput')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Output->links()}}
				</div>
			</div>
		</div>
@endsection