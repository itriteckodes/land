@extends('layouts.agent')

@section('content')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Add Property</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{route('agent.property.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols1Input">Title</label>
                        <input type="text" name="title" class="form-control" id="example3cols1Input" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols2Input">Area in sqf</label>
                        <input type="text" name="area" class="form-control" id="example3cols2Input" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols3Input">Bedrooms</label>
                        <input type="text" name="bedrooms" class="form-control" id="example3cols3Input" required>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlSelect1">Type</label>
                        <select name="type" class="form-control" id="exampleFormControlSelect1">
                          <option selected disabled >Select One</option>
                          <option value="sale">For sale</option>
                          <option value="rent">Rent</option>
                          <option value="invest">Investment</option>

                        </select>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols1Input">Bathrooms</label>
                        <input type="text" name="bathrooms" class="form-control" id="example4cols1Input" required>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="">Garage</label>
                        <input type="text" name="garage" class="form-control" id="" required>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">address</label>
                        <input type="text" name="address" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols2Input">City</label>
                        <input type="text" name="city" class="form-control" id="example4cols2Input" required>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">image 1</label>
                        <input type="file" name="image1" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">image 2</label>
                        <input type="file" name="image2" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">image 3</label>
                        <input type="file" name="image3" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols2Input">Price</label>
                        <input type="number" name="price" class="form-control" id="example4cols2Input" required>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" style="resize: none" class="form-control" id="exampleFormControlTextarea1"
                                rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary float-right ">Submit</button>
        </form>
    </div>
</div>
@endsection