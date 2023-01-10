@extends('layouts.master')

@section('page-header')
<div class="row m-2 d-flex justify-content-center">
	<h4 class="card-title m-2">
		<a href="#" class="bg-success p-2 text-white float-end">Categories</a>
        <a class=" bg-primary p-2 text-white" href="{{url('admin/category')}}">Back</a>
	</h4>
</div>

@endsection
@section('content')
<form action="{{route('houda')}}" method="POST" enctype="multipart/form-data" style="direction: ltr;">
    @csrf
    @method('post')
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" placeholder="category-name" name="name" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Slug</span>
        <input type="text" class="form-control" placeholder="category-name" name="slug" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" name="description"  cols="30" rows="2"></textarea>
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Image</span>
        <input type="file" class="form-control" placeholder="Image" name="image" >

    </div>
    <div class="input-group mb-3 ">

    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Meta Title</span>
        <input type="text" class="form-control" placeholder="Meta Title" name="meta_data" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Meta Keyword</span>
        <textarea name="meta_keywords" class="form-control" cols="30" rows="1"></textarea>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Meta Description</span>
        <textarea class="form-control" name="meta_description"  cols="30" rows="2"></textarea>
    </div>
    {{-- <div class="form-check form-switch mb-2 ">
        <input class="form-check-input" type="checkbox" role="switch" name="status" id="status">
        <label class="form-check-label" for="status">Status</label>
    </div> --}}

    <div class="col-md-12 mb-3 p-0  d-flex justify-content-start">
        <button type="submit" class="btn btn-success  text-white float-end">Save</button>
    </div>

</form>

@endsection
