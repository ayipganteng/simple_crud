@extends('layouts.master')
@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Edit Book Data</h1>
	</div>
	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<div class="card-body">
					<h5 class="card-title">Edit Book Data</h5>

					<form action="/book/{{$book->id}}/update" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama book" value="{{$book->name}}">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Type</label>
							<select name="type" class="form-control" id="exampleFormControlSelect1">
								<option value="Novel" @if($book->type == 'Novel') selected @endif>Novel</option>
								<option value="Comic" @if($book->type == 'Comic') selected @endif>Comic</option>
								<option value="Biography" @if($book->type == 'Biography') selected @endif>Biography</option>
								<option value="Dictionary" @if($book->type == 'Dictionary') selected @endif>Dictionary</option>
								<option value="Magazine" @if($book->type == 'Magazine') selected @endif>Magazine</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Quantity</label>
							<input name="quantity" type="number" class="form-control" id="exampleInputPassword1" placeholder="book" value="{{$book->quantity}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input name="price" type="text" id="rupiah" class="form-control" id="exampleInputPassword1" placeholder="Jenis book" value="{{$book->price}}">
						</div>
					</div>
					<div class="modal-footer">
						<a href="/book" class="btn btn-secondary" data-dismiss="modal">Close</a>&nbsp;&nbsp;&nbsp;
						<button type="submit" class="btn btn-warning">Update</button>
					</form>

				</div>
			</div>
		</div>
	</section>
</main>
@endsection
