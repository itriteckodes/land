@extends('layouts.agent')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header row">
        <h3 class="mb-0 col-md-10">Reserved Token</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Customer Name</th>
              <th>Plot Title</th>
              <th>Plot Price</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Your Price</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tokens as $key=>$token)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$token->name}}</td>
              <td>{{$token->plot->title}}</td>
              <td>{{$token->plot->price}}</td>
              <td>{{$token->email}}</td>
              <td>{{$token->phone}}</td>
              <td>{{$token->price}}</td>
              <td>{{$token->desc}}</td>
              <td>
                  <a class="btn btn-primary btn" href="">Sell Plot</a>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
@endsection
