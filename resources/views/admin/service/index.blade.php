@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Services</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $service)
            <tr>
              <td>{{$service->title}}</td>
              <td>{{$service->price}}</td>
              <td> <img src="{{$service->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$service->description}}</td>
              <td><button id="{{$service->id}}" disc="{{$service->description}}" title="{{$service->title}}"
                  price="{{$service->price}}"  disc="{{$service->description}}"
                  data-toggle="modal" data-target="#edit_plot" class="btn btn-primary editit">Edit</button></td>
              <td>
                <button data-toggle="modal" data-target="#delete_plot" id="{{$service->id}}"
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
        <form action="" id="edit" method="Post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="row">
            <div class="col-md-12">
              <label for="">Title</label>
              <input id="title" type="text" name="title" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">price</label>
              <input id="price" type="text" name="price" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">Image</label>
              <input id="image" type="file" name="image" class="form-control">
            </div>


          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="">Description</label>
              <textarea id="description" name="description" class="form-control" name="" id="" cols="30" rows="4"
                style="resize: none"></textarea>
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
</div>
  @endsection


  

  @section('script')

  <script>
    $('.editit').on('click', function(){
    
      let id=this.id;
        let title = $(this).attr('title');
        let block = $(this).attr('block');
        let price = $(this).attr('price');
        let description = $(this).attr('disc');

        $('#id').val(id);
        $('#title').val(title);
        $('#block').val(block);
        $('#price').val(price);
        $('#description').val(description);
     
         $('#edit').attr('action','{{route('admin.service.update','')}}'+'/'+id);

    });

        $('.delete-btn').on('click',  function(){     
                let id = $(this).attr('id');
                $('#plot_id').val(id);
                $('#delete').attr('action','{{route('admin.service.destroy','')}}'+'/'+id);
            });


  </script>
  @endsection