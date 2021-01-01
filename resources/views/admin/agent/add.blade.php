@extends('layouts.admin')

@section('content')


<div class="card mb-4">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Add Agent</h3>
  </div>
  <div class="card-body">
    <form action="{{route('admin.agent.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="form-control-label" for="example3cols1Input">Agent Name</label>
            <input type="text" name="name" class="form-control" id="example3cols1Input">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="form-control-label" for="example3cols2Input">Email</label>
            <input type="text" name="email" class="form-control" id="example3cols2Input">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="form-control-label" for="example3cols3Input">password</label>
            <input type="password" name="password" class="form-control" id="example3cols3Input">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="form-group">
            <label class="form-control-label" for="example4cols1Input">Image</label>
            <input type="file" name="image" class="form-control" id="example4cols1Input">
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="form-group">
            <label class="form-control-label" for="example4cols2Input">Phone</label>
            <input type="number" name="phone" class="form-control" id="example4cols2Input">
          </div>
        </div>

      </div>
      <button type="submit" class="btn btn-primary float-right btn-block">Submit</button>
    </form>
  </div>
</div>
@endsection