@section('title', __('Finanzas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Finanza Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Finanzas">
						</div>
						<div class="btn-group">
							<button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
								<i class="fa fa-plus"></i>  Add Finanzas
							</button>
							<button class="btn btn-sm btn-danger" wire:click="downloadPDF">
								<i class="fa fa-file-pdf"></i> PDF
							</button>
						</div>
					</div>
				</div>

				<div class="card-body">
						@include('livewire.finanzas.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<td>#</td>
								<th>Tipo Transaccion</th>
								<th>Descripcion</th>
								<th>Monto</th>
								<th>Fecha</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($finanzas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->tipo_transaccion }}</td>
								<td>{{ $row->descripcion }}</td>
								<td>{{ $row->monto }}</td>
								<td>{{ $row->fecha }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Finanza id {{$row->id}}? \nDeleted Finanzas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>
										</ul>
									</div>
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>
					<div class="float-end">{{ $finanzas->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
