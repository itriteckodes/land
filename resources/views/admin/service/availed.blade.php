@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Availed Services</h3>

      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>Id</th>
              <th>Service Title</th>
              <th>Availed By</th>
              <th>Availed date</th>
              <th>Service Price/month</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $key=>$availed)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$availed->service->title}}</td>
              <td>{{$availed->user->name}}</td>
              <td>{{$availed->service->created_at->format('m/d/Y')}}</td>
              <td>{{$availed->service->price}}</td>
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


  @endsection


  

