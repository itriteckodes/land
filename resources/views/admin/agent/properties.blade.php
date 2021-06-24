@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Agent Properties</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>Area</th>
              <th>Marla</th>
              <th>price</th>
              <th>Bedrooms</th>
              <th>Bathroms</th>
              <th>Garage</th>
              <th>Image</th>
              <th>Address</th>
              <th>Block</th>
              <th>Discription</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($properties as $property)
            <tr>
              <td>{{$property->title}}</td>
              <td>{{$property->area}}</td>
              <td>{{$property->marla}}</td>
              <td>{{$property->price}}</td>
              <td>{{$property->bedrooms}}</td>
              <td>{{$property->bathrooms}}</td>
              <td>{{$property->garage}}</td>
              <td> <img src="{{$property->image1}}" height="50px" width="80px" alt=""></td>
              <td>{{$property->address}}</td>
              <td>{{$property->block}}</td>
              <td>{{$property->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

  @endsection