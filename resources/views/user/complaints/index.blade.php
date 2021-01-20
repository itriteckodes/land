@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Plots</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>phone</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($complaints as $complaint)
            <tr>
              <td>{{$complaint->name}}</td>
              <td>{{$complaint->phone}}</td>
              <td>{{$complaint->subject}}</td>
              <td>{{$complaint->message}}</td>
                 <td>
                  <button data-toggle="modal" data-target="#delete_complaint" id="{{$complaint->id}}" class="btn btn-danger delete-btn">Delete</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="delete_complaint" tabindex="-1" role="dialog" aria-labelledby="delete_complaint" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are ypu sure you want to delete this Complaint?</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="delete" class="col s12" method="POST" action="">
          @csrf
          @method('delete')
          <input type="hidden" id="complaint_id">
          <div class="text-right">
              <button type="button" class="mr-2 btn waves-effect waves-light red modal-close">cancel</button> 
              <button type="submit" class=" btn btn-danger">Delete</button>
          </div>
         
      </form>
    </div>
  </div>
</div>


@endsection


@section('script')

<script>
 

        $('.delete-btn').on('click',  function(){     
                let id = $(this).attr('id');
                $('#complaint_id').val(id);
                $('#delete').attr('action','{{route('user.complaint.destroy','')}}'+'/'+id);
            });


</script>
@endsection