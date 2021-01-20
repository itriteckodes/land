@extends('layouts.user')

@section('content')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Add Complaint</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{route('user.complaint.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols1Input">Name</label>
                        <input type="text" name="name" class="form-control" id="example3cols1Input" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols2Input">Phone</label>
                        <input type="text" name="phone" class="form-control" id="example3cols2Input" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label" for="example3cols3Input">Subject</label>
                        <input type="text" name="subject" class="form-control" id="example3cols3Input" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                        <textarea name="message" style="resize: none" class="form-control"
                            id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary float-right ">Submit</button>
    </form>
</div>
</div>
@endsection