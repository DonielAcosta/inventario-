@extends("Templade.Templade")

@section("title","user")

@section("body")
<h3>user</h3>
	<div class="dropdown-menu">

		<form class="px-4 py-3" action="{{route('Login.index')}}" method="get">
			@csrf
			<input type="text" class="form-control" name="texto" value="{{$texto}}">

			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="email@example.com">
			</div>
			<div class="form-group">
				<label for="exampleDropdownFormPassword1">Password</label>
				<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="dropdownCheck">
				<label class="form-check-label" for="dropdownCheck">
			        Remember me
			    </label>
			</div>
			<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">New around here? Sign up</a>
		<a class="dropdown-item" href="#">Forgot password?</a>
	</div>
	
		{{-- <div class="row">
			<div class="col-xl-126">
				<form action="{{route('Login.index')}}" method="get">
					<div class="row">
						<div class="col-sm-5 my-1">
							<input type="text" class="form-control" name="texto" value="{{$texto}}">
							
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar" >	
						</div>
						<div class="col-auto my-1">
							<a href="{{route('Login.create')}}" class="btn btn-success">Nuevo</a>
						</div>
					</div>
				</form>
			</div> --}}
			{{-- <div class="col-lx-12">
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
			</div> --}}
		</div>
@endsection