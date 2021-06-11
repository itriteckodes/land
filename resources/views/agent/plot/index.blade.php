@extends('layouts.agent')

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
              <th>Area</th>
              <th>Marla</th>
              <th>Image</th>
              <th>Address</th>
              <th>Block</th>
              <th>Discription</th>
              <th>Action</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($plots as $plot)
            <tr>
              <td>{{$plot->title}}</td>
              <td>{{$plot->area}}</td>
              <td>{{$plot->marla}}</td>
              <td> <img src="{{$plot->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$plot->address}}</td>
              <td>{{$plot->block}}</td>
              <td>{{$plot->description}}</td>
              <td>
                <a href="{{route('agent.plot.show',$plot->id)}}">
                <button class="btn btn-success delete-btn">Token Reserved</button>
                </a>
              </td>
              <td><a href="" id="{{$plot->id}}" plot="{{$plot}}" title="{{$plot->title}}" area="{{$plot->area}}"
                  address="{{$plot->address}}" block="{{$plot->block}}" disc="{{$plot->description}}" data-toggle="modal"
                  data-target="#edit_plot" class="btn btn-primary edit-btn">Edit</a></td>
                <td>
                  <button data-toggle="modal" data-target="#delete_plot" id="{{$plot->id}}" class="btn btn-danger delete-btn">Delete</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_plot" tabindex="-1" role="dialog" aria-labelledby="edit_plot" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Plot</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="edit" method="Post">
          @method('put')
          @csrf
          <div class="row">
            <div class="col-md-6">
              <label for="">Title</label>
              <input id="title" type="text" name="title" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">Area</label>
              <input id="area" type="text" name="area" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Address</label>
              <input id="address" type="text" name="address" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">Block</label>
              <input id="block" type="text" name="block" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="">Description</label>
              <textarea id="description" name="description" class="form-control" name="" id="" cols="30" rows="4"
                style="resize: none"></textarea>
            </div>
            <div class="col-md-6 ">
              <div class="form-group">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" value="5" name="marla">
                      <label class="form-check-label">5 Marla</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" value="7" name="marla">
                      <label class="form-check-label">7 Marla</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" value="10" name="marla">
                      <label class="form-check-label">10 Marla</label>
                  </div>
              </div>
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


<div class="modal fade" id="delete_plot" tabindex="-1" role="dialog" aria-labelledby="delete_plot" aria-hidden="true">
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


@endsection


@section('script')

<script>
  $('.edit-btn').on('click', function(){

        

        let id=this.id;
        let title = $(this).attr('title');
        let plot = $(this).attr('plot');
        let area = $(this).attr('area');
        let address = $(this).attr('address');
        let block = $(this).attr('block');
        let description = $(this).attr('disc');

        $('#id').val(id);
        $('#title').val(title);
        $('#area').val(area);
        $('#address').val(address);
        $('#block').val(block);
        $('#description').val(description);
     
         $('#edit').attr('action','{{route('agent.plot.update','')}}'+'/'+id);

    });

        $('.delete-btn').on('click',  function(){     
                let id = $(this).attr('id');
                $('#plot_id').val(id);
                $('#delete').attr('action','{{route('agent.plot.destroy','')}}'+'/'+id);
            });


</script>
@endsection