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
                <th>Image</th>
                <th>Phone</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($agents as $agent)
              <tr>
                  <td>{{$agent->name}}</td>
                  <td>{{$agent->email}}</td>
                  <td><img src="{{$agent->image}}" height="50px" width="50px" alt=""></td>
                  <td>{{$agent->phone}}</td>
                  <td><a class="btn btn-primary" href="{{route('admin.agent_properties',$agent->id)}}">Properties</a></td>
                  <td><a class="btn btn-success" href="{{route('admin.agent_plots',$agent->id)}}">Plots</a></td>
                  <td><a data-toggle="modal" data-target="#delete_agent" id="{{$agent->id}}" class="btn btn-danger text-white delete-btn">Delete</a></td>


              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="delete_agent" tabindex="-1" role="dialog" aria-labelledby="delete_plot" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are ypu sure you want to delete this User?</h5>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="delete" class="col s12" method="post" action="">
            @csrf
            @method("delete")
            <input type="hidden" id="agent_id">
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
              $('#agent_id').val(id);
              $('#delete').attr('action','{{route('admin.agent.destroy','')}}'+'/'+id);
          });


</script>
@endsection