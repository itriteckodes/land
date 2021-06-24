@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Pending Plot Leads</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th>Token Amount</th>
              <th>plot title</th>
              <th>plot image</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach (App\Models\Lead::where('user_id',Auth::user()->id)->where('plot_id','!=',null)->where('accepted',false)->get() as $lead)
            <tr>
              <td>{{$lead->name}}</td>
              <td>{{$lead->email}}</td>
              <td>{{$lead->message}}</td>
              <td>{{$lead->token_amount}}</td>
              <td>{{$lead->plot->title}}</td>
              <td><img src="{{$lead->plot->image}}" height="50px" width="50px" alt=""></td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Pending Property Leads</h3>
  
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Token Amount</th>
                <th>Property title</th>
                <th>Property image</th>
              </tr>
            </thead>
            <tbody>
                @foreach (App\Models\Lead::where('user_id',Auth::user()->id)->where('property_id','!=',null)->where('accepted',false)->get() as $lead)
              <tr>
                <td>{{$lead->name}}</td>
                <td>{{$lead->email}}</td>
                <td>{{$lead->message}}</td>
                <td>{{$lead->token_amount}}</td>
                <td>{{$lead->property->title}}</td>
                <td><img src="{{$lead->property->image1}}" height="50px" width="50px" alt=""></td>
  
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  

  @endsection