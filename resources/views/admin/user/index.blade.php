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
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
              <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="{{route('admin.user_properties',$user->id)}}" class="btn btn-primary btn-sm">Properties</a></td>
                  <td><a href="{{route('admin.user_plots',$user->id)}}" class="btn btn-success btn-sm">Plots</a></td>
                  <td><a data-toggle="modal" data-target="#delete_user" id="{{$user->id}}" class="btn btn-danger btn-sm text-white delete-btn">Delete</a></td>cccccc
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="delete_plot" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are ypu sure you want to delete this User?</h5>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="delete" class="col s12" method="PUT" action="">
            @csrf
            <input type="hidden" id="user_id">
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

      $('.delete-btn').on('click',  function(){     
              let id = $(this).attr('id');
              $('#user_id').val(id);
              $('#delete').attr('action','{{route('admin.delete_user','')}}'+'/'+id);
          });


</script>
@endsection