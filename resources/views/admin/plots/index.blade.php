@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Plots</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>Owner Name</th>
              <th>Area</th>
              <th>Marla</th>
              <th>Image</th>
              <th>Address</th>
              <th>Block</th>
              <th>Discription</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($plots as $plot)
            <tr>
              <td>{{$plot->title}}</td>
              <td>{{$plot->user->name}}</td>
              <td>{{$plot->area}}</td>
              <td>{{$plot->marla}}</td>
              <td> <img src="{{$plot->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$plot->address}}</td>
              <td>{{$plot->block}}</td>
              <td>{{$plot->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



@endsection