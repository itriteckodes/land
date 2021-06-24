@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Agents</h3>
          
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Phone</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($agents as $agent)
              <tr>
                  <td>{{$agent->name}}</td>
                  <td>{{$agent->email}}</td>
                  <td><img src="{{$agent->image}}" height="50px" width="50px" alt=""></td>
                  <td>{{$agent->phone}}</td>
                  <td><a class="btn btn-primary" href="{{route('admin.agent_properties',$agent->id)}}">Properties</a></td>
                  <td><a class="btn btn-success" href="{{route('admin.agent_plots',$agent->id)}}">Plots</a></td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection