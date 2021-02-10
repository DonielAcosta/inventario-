@extends("Templade.Templade")

@section("title","Input")

@section("body")
<h3>in</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Input.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Input.create')}}" class="btn btn-success">Nuevo</a>
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
								<th>Total</th>
								<th>Fecha</th>
								<th>Numero de Factura</th>
								<th>User</th>
								<th>provedor</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Input)<=0)
						<tr>
							<td colspan="6"> No hay resultados</td>
						</tr>
						@else
						@foreach($Input as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->whole}}</td>
								<td>{{$item->date}}</td>
								<td>{{$item->n_invoice}}</td>
								<td>{{$item->id_user}}</td>
								<td>{{$item->id_supplier}}</td>
								<td>
								<a href="{{route('Input.edit',$item->id)}}"Class= "btn btn-warning btn-sm">Editar</a>
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" 
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