@extends('admin.dashboard')

@section('page-header')
<div class="row m-2 d-flex justify-content-center">
	<h4 class="card-title m-2">
		<a href="#" class="bg-success p-2 text-white float-end">Categories</a>
	</h4>
</div>

@endsection
@section('content')

<div class="card text-center">
  <div class="card-header">
  	Categories
  </div>
  <div class="card-body">
    <h5 class="card-title">Add New Categories</h5>
    <a href="{{ url('admin/category/create') }}" class="btn btn-primary">Add Category</a>
  </div>
</div>
@endsection
