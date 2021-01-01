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
              <th>Email</th>
              <th>Message</th>
              <th>plot title</th>
              <th>plot image</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($leads as $lead)
            <tr>
              <td>{{$lead->name}}</td>
              <td>{{$lead->email}}</td>
              <td>{{$lead->message}}</td>
              <td>{{$lead->plot->title}}</td>
              <td><img src="{{$lead->plot->image}}" height="50px" width="50px" alt=""></td>
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
              <label for="">Bedrooms</label>
              <input id="bedrooms" type="text" name="bedrooms" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">Bathrooms</label>
              <input id="bathrooms" type="text" name="bathrooms" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="">Garage</label>
              <input id="garage" type="text" name="garage" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">Image</label>
              <input id="image" type="file" name="image" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="">Address</label>
              <input id="address" type="text" name="address" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="">City</label>
              <input id="city" type="text" name="city" class="form-control">
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
        <h5 class="modal-title" id="exampleModalLabel">Are ypu sure you want to delete this Property?</h5>

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
            <button type="submit" class="btn btn-danger">Delete</button>
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
        let bedrooms = $(this).attr('bedrooms');
        let bathrooms = $(this).attr('bathrooms');
        let garage = $(this).attr('garage');
        let area = $(this).attr('area');
        let address = $(this).attr('address');
        let city = $(this).attr('city');
        let description = $(this).attr('disc');

        $('#id').val(id);
        $('#title').val(title);
        $('#bedrooms').val(bedrooms);
        $('#bathrooms').val(bathrooms);
        $('#garage').val(garage);
        $('#area').val(area);
        $('#address').val(address);
        $('#city').val(city);
        $('#description').val(description);
     
         $('#edit').attr('action','{{route('agent.property.update','')}}'+'/'+id);

    });

        $('.delete-btn').on('click',  function(){     
                let id = $(this).attr('id');
                $('#plot_id').val(id);
                $('#delete').attr('action','{{route('agent.property.destroy','')}}'+'/'+id);
            });


  </script>
  @endsection