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
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
              </tr>
            </tfoot>
            <tbody>
                @foreach ($agents as $agent)
              <tr>
                  <td>{{$agent->name}}</td>
                  <td>{{$agent->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection