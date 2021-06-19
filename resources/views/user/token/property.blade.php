@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header row">
        <h3 class="mb-0 col-md-10">Booking Property</h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Property Title</th>
              <th>Property Image</th>
              <th>Property Price</th>
              <th>Your Price</th>
              <th>Down Payment</th>
              <th>InstallMent</th>
              <th>Description</th>
              <th>Next InstallMent</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tokens as $key=>$token)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$token->property->title}}</td>
              <td><img src="{{$token->property->image1}}" height="50px" width="80px" alt=""></td>
              <td>{{$token->property->price}}</td>
              <td>{{$token->price}}</td>
              <td>{{round(($token->property->price)*(0.1))}}</td>
              <td>{{round((($token->property->price)-(($token->property->price)*(0.1)))/8)}}</td>
              <td>{{$token->desc}}</td>
              <td>
                  @if ($token->status == false)
                      <a class="btn btn-primary btn-sm" href="{{route('user.token.show',$token->id)}}">Pay Down Payment</a>

                      @else
                      <span class="text-danger font-weight-bolder">{{Carbon\Carbon::parse($token->updated_at)->addMonth()->format('d/m/Y')}}</span>
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
