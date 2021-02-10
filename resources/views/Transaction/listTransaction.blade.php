@extends("Templade.Templade")

@section("title","Transaction")

@section("body")
<h3>Transaction</h3>
		<div class="row">
			<div class="col-xl-126">
				<form action="{{route('Transaction.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" >
							{{-- value="{{$texto}}" --}}
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Transaction.create')}}" class="btn btn-success">Nuevo</a>
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
								<th>precio</th>
								<th>id_Producto</th>
								<th>id_stock</th>
								<th>id_input</th>
								<th>Opciones</th>
								
							</tr>
						</thead>
						<tbody>
						@if(count($Transaction)<=0)
						<tr>
							<td colspan="4"> No hay resultados</td>
						</tr>
						@else
						@foreach($Transaction as $item)
							<tr>
								<td>{{$item->id}}</td>
								<td>{{$item->quantity}}</td>
								<td>{{$item->price}}</td>
								<td>{{$item->id_product}}</td>
								<td>{{$item->id_stock}}</td>
								<td>{{$item->id_input}}</td>
								<td>
								<a href="{{route('Transaction.edit',$item->id)}}"Class= "btn btn-warning btn-sm">Editar</a>
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" 
								data-bs-target="#modal-delete-{{$item->id}}">
									Eliminar
								</button>

								 </td>
							</tr>
							@include('Transaction.deleteTransaction')
						@endforeach
						@endif
						</tbody>
					</table>
					{{$Transaction->links()}}
				</div>
			</div>
		</div>
@endsection