@extends("Templade.Templade")

@section("title","Input Entradas")

@section("body")
<h3>Entradas</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Input.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-info" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Input.create')}}" class="btn btn-warning">Nuevo</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lx-12">
				<div class="table-reponsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Proveedor</th>
								<th>Total</th>
								<th>Fecha</th>
								<th>Numero de Factura</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Input)<=0)
						<tr>
							<td colspan="5"> No hay resultados</td>
						</tr>
						@else
						@foreach($Input as $item)
							<tr>
								<td>{{$item->user->name}}</td>
								<td>{{$item->supplier->name}}</td>
								<td>{{$item->whole}}</td>
								<td>{{$item->date}}</td>
								<td>{{$item->n_invoice}}</td>
								<td>
								<a href="{{route('Input.edit',$item->id)}}" Class= "btn btn-info">Editar</a>
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>
								
								 </td>
							</tr>
							@include('Input.deleteInput')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Input->links()}}
				</div>
			</div>
		</div>
@endsection