@extends('layouts.master')
@section('content')
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Books</h1>
	</div>
	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<h5 class="card-title">Books Data</h5>
								<!--@if(Session::has('sukses'))
								<div class="alert alert-success" role="alert">
									{{Session::get('sukses')}}
								</div>
								@endif-->		
							</div>
							<div class="col-6">
								<div class="right float-end">
									<button type="button" class="btn btn-primary" style="margin-top: 12px;" data-bs-toggle="modal" data-bs-target="#basicModal">
										Add Book Data
									</button>
								</div>
								<!-- Basic Modal -->
							</div>			
						</div>
						<!-- Table with hoverable rows -->
						<table class="table table-hover" id="datatable">
							<thead>
								<tr>
									<th>BOOK</th>
									<th>TYPE</th>
									<th>QUANTITY</th>
									<th>PRICE</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								@foreach($book as $b)
								<tr>
									<td>{{$b->name}}</td>
									<td>{{$b->type}}</td>
									<td>{{$b->quantity}}</td>
									<td>{{$b->price}}</td>
									<td>
										<a href="/book/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
										<a href="#" class="btn btn-danger delete" book-id="{{$b->id}}" book_name="{{$b->name}}">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<!-- End Table with hoverable rows -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Book Data</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<!-- General Form Elements -->
					<form action="/book/create" method="POST">
						{{csrf_field()}}
						<div class="row mb-3{{$errors->has('name') ? ' has-error' : ''}}">
							<label for="inputText" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input name="name" type="text" class="form-control" value="{{old('name')}}">
								@if($errors->has('name'))
								<span class="help-block" style="color: red;">{{$errors->first('name')}}</span>
								@endif
							</div>
						</div>
						<div class="row mb-3{{$errors->has('type') ? ' has-error' : ''}}">
							<label class="col-sm-2 col-form-label">Type</label>
							<div class="col-sm-10">
								<select name="type" class="form-select" id="floatingSelect" aria-label="Floating label select example">
									<option value="Novel"{{(old('type') == 'Novel') ? 'selected' : ''}}>Novel</option>
									<option value="Comic"{{(old('type') == 'Comic') ? 'selected' : ''}}>Comic</option>
									<option value="Biography"{{(old('type') == 'Biography') ? 'selected' : ''}}>Biography</option>
									<option value="Dictionary"{{(old('type') == 'Dictionary') ? 'selected' : ''}}>Dictionary</option>
									<option value="Magazine"{{(old('type') == 'Magazine') ? 'selected' : ''}}>Magazine</option>
								</select>
								@if($errors->has('type'))
								<span class="help-block" style="color: red;">{{$errors->first('type')}}</span>
								@endif
							</div>
						</div>
						<div class="row mb-3{{$errors->has('quantity') ? ' has-error' : ''}}">
							<label for="inputNumber" class="col-sm-2 col-form-label">quantity</label>
							<div class="col-sm-10">
								<input name="quantity" type="number" class="form-control" value="{{old('quantity')}}">
								<input name="quantity" type="number" min="1" class="form-control" value="{{old('quantity')}}">
								@if($errors->has('quantity'))
								<span class="help-block" style="color: red;">{{$errors->first('quantity')}}</span>
								@endif
							</div>
						</div>
						<div class="row mb-3{{$errors->has('price') ? ' has-error' : ''}}">
							<label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
							<div class="col-sm-10">
								<input name="price" type="text" id="rupiah" class="form-control" value="{{old('price')}}">
								@if($errors->has('price'))
								<span class="help-block" style="color: red;">{{$errors->first('price')}}</span>
								@endif
							</div>
						</div>
						<div class="row mb-3">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</form><!-- End General Form Elements -->
			</div>
		</div>
	</div>
</div>
@endsection
@section('sweetalert')
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
		$('body').on('click','.delete',function(){
			var book_id = $(this).attr('book-id');
			var book_name = $(this).attr('book_name');

			swal({
				title: "Are you sure?",
				text: "The " + book_name +" wants to delete??",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
				if (willDelete) {
                    //swal("Data siswa dengan id "+ siswa_id +" telah berhasil dihapus!", {
                    //icon: "success",
                    //});
                    window.location = "/book/"+book_id+"/delete";
                    
                } else {
                	swal("Data is not deleted");
                }
            });
		});
	});
</script>
@endsection

