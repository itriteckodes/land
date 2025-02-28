@extends('layouts.agent')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Properties</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>Area</th>
              <th>Marla</th>
              <th>price</th>
              <th>Bedrooms</th>
              <th>Bathroms</th>
              <th>Garage</th>
              <th>Image</th>
              <th>Address</th>
              <th>Block</th>
              <th>Discription</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($properties as $property)
            <tr>
              <td>{{$property->title}}</td>
              <td>{{$property->area}}</td>
              <td>{{$property->marla}}</td>
              <td>{{$property->price}}</td>
              <td>{{$property->bedrooms}}</td>
              <td>{{$property->bathrooms}}</td>
              <td>{{$property->garage}}</td>
              <td> <img src="{{$property->image1}}" height="50px" width="80px" alt=""></td>
              <td>{{$property->address}}</td>
              <td>{{$property->block}}</td>
              <td>{{$property->description}}</td>
              <td><button id="{{$property->id}}" bedrooms="{{$property->bedrooms}}" bathrooms="{{$property->bathrooms}}"
                  title="{{$property->title}}" area="{{$property->area}}" garage="{{$property->garage}}"
                  address="{{$property->address}}" block="{{$property->block}}" disc="{{$property->description}}"
                  data-toggle="modal" data-target="#edit_plot" class="btn btn-primary editit">Edit</button></td>
              <td>
                <button data-toggle="modal" data-target="#delete_plot" id="{{$property->id}}"
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
        let block = $(this).attr('block');
        let description = $(this).attr('disc');

        $('#id').val(id);
        $('#title').val(title);
        $('#bedrooms').val(bedrooms);
        $('#bathrooms').val(bathrooms);
        $('#garage').val(garage);
        $('#area').val(area);
        $('#address').val(address);
        $('#block').val(block);
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