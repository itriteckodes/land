@extends('layouts.admin')
@section('content')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Add Employee</h3>
    </div>
    <div class="card-body">
      <form action="{{route('admin.employee.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label" for="example3cols1Input">First Name</label>
              <input type="text" name="fname" class="form-control" id="example3cols1Input">
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label" for="example3cols1Input">Last Name</label>
              <input type="text" name="lname" class="form-control" id="example3cols1Input">
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label" for="example3cols1Input">Job Title</label>
              <input type="text" name="job_title" class="form-control" id="example3cols1Input">
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
            <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-control-label" for="example4cols2Input">Salary</label>
              <input type="number" name="salary" class="form-control" id="example4cols2Input">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="form-control-label" for="example3cols2Input">Rank</label>
              <input type="text" name="rank" class="form-control" id="example3cols2Input">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label" for="example3cols2Input">Cnic</label>
              <input type="text" name="cnic" class="form-control" id="example3cols2Input">
            </div>
          </div>
            
            <div class="col-md-4">
              <div class="form-group">
                  <label>Category</label>
                  <select name="category" class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled>select One</option>
                    <option>Permanent</option>
                    <option>Contract</option>
                  </select>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Address</label>
                <input type="text" name="address" class="form-control" id="example4cols1Input">
              </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right btn-block">Submit</button>
      </form>
    </div>
  </div>
@endsection