@extends('layouts.agent')

@section('content')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Add Plot</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{route('agent.plot.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols1Input">Title</label>
                        <input type="text" name="title" class="form-control" id="example3cols1Input" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols2Input">Area in sqf</label>
                        <input type="text" name="area" class="form-control" id="example3cols2Input" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">image</label>
                        <input type="file" name="image" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">address</label>
                        <input type="text" name="address" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Block</label>
                        <select name="block" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled>select One</option>
                          <option>Umer Block</option>
                          <option>Abu-Baker Block</option>
                          <option>Usman Block</option>
                          <option>Ali Block</option>

                        </select>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols2Input">Price</label>
                        <input type="text" name="price" class="form-control" id="example4cols2Input" required>
                    </div>
                </div>
        
            </div>
            <div class="row">
                <div class=" col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">latitude</label>
                        <input type="text" name="lat" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="example4cols3Input">longitude</label>
                        <input type="text" name="long" class="form-control" id="example4cols3Input" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" style="resize: none" class="form-control" id="exampleFormControlTextarea1"
                            rows="3" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="5" name="marla" checked>
                          <label class="form-check-label">5 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="7" name="marla">
                          <label class="form-check-label">7 Marla</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="10" name="marla" >
                          <label class="form-check-label">10 Marla</label>
                        </div>
                      </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection