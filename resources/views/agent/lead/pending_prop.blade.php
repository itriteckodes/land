@extends('layouts.agent')

@section('content')

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
              <th>plot title</th>
              <th>plot image</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($leads as $lead)
            <tr>
              <td>{{$lead->name}}</td>
              <td>{{$lead->email}}</td>
              <td>{{$lead->message}}</td>
              <td>{{$lead->token_amount}}</td>
              <td>{{$lead->property->title}}</td>
              <td><img src="{{$lead->property->image1}}" height="50px" width="50px" alt=""></td>
              <td>
                <a href="{{route('agent.lead_prop_accept',[$lead->property->id,$lead->id])}}" class="btn btn-primary">Accept</a>
              </td>
              {{-- <td>{{$lead->garage}}</td>
              <td> <img src="{{$property->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$property->address}}</td>
              <td>{{$property->city}}</td>
              <td>{{$property->description}}</td>
              <td><button id="{{$property->id}}" bedrooms="{{$property->bedrooms}}" bathrooms="{{$property->bathrooms}}"
                  title="{{$property->title}}" area="{{$property->area}}" garage="{{$property->garage}}"
                  address="{{$property->address}}" city="{{$property->city}}" disc="{{$property->description}}"
                  data-toggle="modal" data-target="#edit_plot" class="btn btn-primary editit">Edit</button></td>
              <td>
                <button data-toggle="modal" data-target="#delete_plot" id="{{$property->id}}"
                  class="btn btn-danger delete-btn">Delete</button>
              </td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  @endsection