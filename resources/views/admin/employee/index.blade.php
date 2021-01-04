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
                <th>Name</th>
                <th>Job Title</th>
                <th>Rank</th>
                <th>Image</th>
                <th>phone</th>
                <th>salary</th>
                <th>address</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
              <tr>
                <td>{{$employee->name}}</td>
                <td>{{$employee->job_title}}</td>
                <td>{{$employee->rank}}</td>
                <td><img src="{{$employee->image}}" height="50px" width="50px" alt=""></td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->salary}}</td>
                <td>{{$employee->address}}</td>
                <td><button id="{{$employee->id}}" name="{{$employee->name}}" job_title="{{$employee->job_title}}"
                    rank="{{$employee->rank}}" phone="{{$employee->phone}}" salary="{{$employee->salary}}" address="{{$employee->address}}"
                    data-toggle="modal" data-target="#edit_employee" class="btn btn-primary editit">Edit</button></td>
                <td>
                  <button data-toggle="modal" data-target="#delete_employee" id="{{$employee->id}}"
                    class="btn btn-danger delete-btn">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="edit_employee" tabindex="-1" role="dialog" aria-labelledby="edit_employee" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Employee Details</h5>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="edit" method="Post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
              <div class="col-md-6">
                <label for="">Job Title</label>
                <input id="job_title" type="text" name="job_title" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="">Name</label>
                <input id="name" type="text" name="name" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="">Rank</label>
                <input id="rank" type="text" name="rank" class="form-control">
              </div>
  
              <div class="col-md-6">
                <label for="">Image</label>
                <input id="image" type="file" name="image" class="form-control">
              </div>
  
  
            </div>
  
            <div class="row">
              <div class="col-md-3">
                <label for="">Phone</label>
                <input id="phone" type="number" name="phone" class="form-control">

              </div> 
               <div class="col-md-3">
                <label for="">Salary</label>
                <input id="salary" type="number" name="salary" class="form-control">

              </div>  
              <div class="col-md-6">
                <label for="">Address</label>
                <input id="address" type="text" name="address" class="form-control">

              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="delete_employee" tabindex="-1" role="dialog" aria-labelledby="delete_employee" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are ypu sure you want to delete this plot?</h5>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="delete" class="col s12" method="POST" action="">
            @csrf
            @method('delete')
            <input type="hidden" id="plot_id">
            <div class="text-right">
              <button type="button" class="mr-2 btn waves-effect waves-light red modal-close">cancel</button>
              <button type="submit" class=" btn btn-danger">Delete</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </div>
    @endsection
  
  
    
  
    @section('script')
  
    <script>
      $('.editit').on('click', function(){
      
        let id=this.id;
          let job_title = $(this).attr('job_title');
          let name = $(this).attr('name');
          let rank = $(this).attr('rank');
          let phone = $(this).attr('phone');
          let salary = $(this).attr('salary');
          let address = $(this).attr('address');
  
          $('#id').val(id);
          $('#name').val(name);
          $('#job_title').val(job_title);
          $('#rank').val(rank);
          $('#phone').val(phone);
          $('#salary').val(salary);
          $('#address').val(address);
       
           $('#edit').attr('action','{{route('admin.employee.update','')}}'+'/'+id);
  
      });
  
          $('.delete-btn').on('click',  function(){     
                  let id = $(this).attr('id');
                  $('#employee_id').val(id);
                  $('#delete').attr('action','{{route('admin.employee.destroy','')}}'+'/'+id);
              });
  
  
    </script>
    @endsection