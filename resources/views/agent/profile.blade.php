@extends('layouts.agent')

@section('content')
<div class="card">
  <!-- Card header -->
  <div class="card-header">
    <h3 class="mb-0">Profile</h3>
  </div>
  <!-- Card body -->
  <div class="card-body">
    <div class="row">
    </div>
    <form action="{{route('agent.update_profile')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <div class="form-group">
            <label class="form-control-label"> name</label>
            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="form-group">
            <label class="form-control-label" for="validationDefault02">Email</label>
            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="form-group">
            <label class="form-control-label">Image</label>
            <div class="input-group">
              <img src="{{Auth::user()->image}}" height="50px" width="50px" alt="">
              <input type="file" class="form-control" name="image" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <div class="form-group">
            <label class="form-control-label">Password (Leave empty if not want to update)</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="form-group">
            <label class="form-control-label">Phone </label>
            <input type="number" class="form-control" value="{{Auth::user()->phone}}" name="phone" required>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Update</button>
    </form>
  </div>
</div>
@endsection