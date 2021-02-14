@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">My services</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Image</th>
              <th>Price</th>
              <th>Availed</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $key=>$service)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$service->title}}</td>
              <td><img src="{{$service->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$service->price}}</td>
              <td>{{$service->created_at->diffForHumans()}}</td>
              <td>{{$service->description}}</td>
              <td><a class="btn btn-primary btn-sm" href="{{route('user.avail_service',$service->id)}}">Avail Service</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection

