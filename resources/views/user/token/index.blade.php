@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header row">
        <h3 class="mb-0 col-md-10">My Token</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Plot Title</th>
              <th>Plot Image</th>
              <th>Plot Price</th>
              <th>Your Price</th>
              <th>Down Payment</th>
              <th>InstallMent</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tokens as $key=>$token)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$token->plot->title}}</td>
              <td><img src="{{$token->plot->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$token->plot->price}}</td>
              <td>{{$token->price}}</td>
              <td>{{round(($token->plot->price)*(0.1))}}</td>
              <td>{{round((($token->plot->price)-(($token->plot->price)*(0.1)))/8)}}</td>
              <td>{{$token->desc}}</td>
              <td>
                  @if ($token->status == false)
                      <a class="btn btn-primary btn-sm" href="{{route('user.token.show',$token->id)}}">Book Plot</a>

                      @else
                      <span class="text-danger font-weight-bolder">PENDING</span>
                  @endif</td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    
@endsection
