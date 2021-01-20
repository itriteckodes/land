@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Leads</h3>
  
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary Paid</th>
                <th>Cnic</th>
                <th>Address</th>
                <th>Print</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($payments as $payment)
              <tr>
                <td>{{$payment->employee->fname}}</td>
                <td>{{$payment->employee->lname}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->employee->cnic}}</td>
                <td>{{$payment->employee->address}}</td>
                <td><a href="{{route('admin.print',$payment->id)}}"  class="btn btn-success">Print</a></td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection

