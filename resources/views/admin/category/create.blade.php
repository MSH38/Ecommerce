@extends('admin.dashboard')

@section('page-header')
<div class="row m-2 d-flex justify-content-center">
	<h4 class="card-title m-2">
		<a href="#" class="bg-success p-2 text-white float-end">Categories</a>
        <a class=" bg-primary p-2 text-white" href="{{url('admin/category')}}">Back</a>
	</h4>
</div>
@endsection
@section('content')
<!-- <div class="row">
        <div class="card card text-center">
            <div class="card-header">
                <h3>
                    <a class="btn btn-primary btn-sm float-end text-white" href="{{url('admin/category')}}">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-contol">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">slug</label>
                            <input type="text" name="slug" class="form-contol">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="Image" class="form-contol">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" >
                        </div>
                        <div class="col-md-12">
                            <h4>Seo Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Title</label>
                            <input type="text" name="Meta_title" class="form-contol">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Keyword</label>
                            <textarea name="Meta_keyword" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success text-white float-end">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</div>  -->
<form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" placeholder="category-name" name="name" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Slug</span>
        <input type="text" class="form-control" placeholder="category-name" name="Slug" >
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" name="description"  cols="30" rows="3"></textarea>
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Tmage</span>
        <input type="file" class="form-control" placeholder="Image" name="image" >
        
    </div>
    <div class="input-group mb-3 ">
        
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Slug</span>
        <input type="text" class="form-control" placeholder="category-name" name="Slug" >
    </div>
    <!-- <div class="col-12"> -->
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status" name="status">
        <label class="form-check-label" for="Status">
            Status
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Status
            </label>
        </div>
    <!-- </div> -->


    <!-- <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <div class="mb-3">
    <label for="basic-url" class="form-label">Your vanity URL</label>
    <div class="input-group">
        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="form-text">Example help text goes outside the input group.</div>
    </div>

    <div class="input-group mb-3">
    <span class="input-group-text">$</span>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    <span class="input-group-text">.00</span>
    </div>

    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
    <span class="input-group-text">@</span>
    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
    </div>

    <div class="input-group">
    <span class="input-group-text">With textarea</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div> -->
</form>

@endsection
