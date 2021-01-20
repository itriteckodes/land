@extends('layouts.admin')

@section('content')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Add Service</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols1Input">Title</label>
                        <input type="text" name="title" class="form-control" id="example3cols1Input" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols3Input">price</label>
                        <input type="text" name="price" class="form-control" id="example3cols3Input" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols1Input">image</label>
                        <input type="file" name="image" class="form-control" id="example4cols1Input" required>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" style="resize: none" class="form-control" id="exampleFormControlTextarea1"
                            rows="3" required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection