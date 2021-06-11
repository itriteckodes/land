@extends('layouts.user')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header row">
        <h3 class="mb-0 col-md-10">My services</h3>
        @if ($services != null)
        <button  class="btn-success btn print text-right">PRINT</button>        
        @else
            
        @endif
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Image</th>
              <th>Price</th>
              <th>Availed</th>
              <th>Description</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $key=>$service)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$service->title}}</td>
              <td><img src="{{$service->image}}" height="50px" width="80px" alt=""></td>
              <td>{{$service->price}}</td>
              <td>{{$service->created_at->diffForHumans()}}</td>
              <td>{{$service->description}}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><h3> Pending Payment:&nbsp;&nbsp;
              @if ($monthly != null)
              {{$monthly}}
              @else
              0
              @endif
              </h3></th>
          </tfoot>
        </table>
      </div><br>
      <div class="text-center">
        @if ($monthly != null)
      <form action="{{route('user.service.payment')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$monthly}}" name="payment">
        <input type="hidden" value="{{Auth::user()->id}}" name="id">
        <button class="btn btn-primary mb-4 pb-2 pt-2 " >PAY NOW</button>
      </form>
      @else
      @endif
    </div>
    </div>
  </div>
</div>

<div class="container" id="divToPrint" style="display: none !important">
  <div class="row">
      <div class="col-xs-12">
          <div class="invoice-title">
              <h2><img class="img" height="100px" width="100px" src="{{asset('print/logo.png')}}" alt=""></h2>
          </div>
          <div class="row">
              <div class="col-xs-6">
                  <address>
                      Name:{{Auth::user()->name}}<br>
                  </address>
              </div>
              <div class="col-xs-6 text-right">
                  <address>
                      Date:{{Carbon\Carbon::now()->format('d-M-y')}}<br>
                      Time:{{Carbon\Carbon::now('Asia/Karachi')->format('g:i:s A')}}<br>
                      Invoice#:54878<br>
                  </address>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-bordered">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Availed</th>
                            <th>Description</th>
                          </tr>
                      </thead>
                      <tbody id="printbody">
                        @foreach ($services as $key=>$service)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$service->title}}</td>
                          <td>{{$service->price}}</td>
                          <td>{{$service->created_at->diffForHumans()}}</td>
                          <td>{{$service->description}}</td>
                        </tr>
                        @endforeach

                      </tbody>
                      <tfoot>
                          <tr>
                            
                              <th colspan="6" class="text-center">Pending Payment:&nbsp;&nbsp;
                                @if ($monthly != null)
                                {{$monthly}}
                                @else
                                0
                                @endif</th>
                          </tr>
                      </tfoot>
                  </table>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6">
          <div class="text-center">
              <Strong>
                  
              </Strong>
          </div>
      </div>
      <div class="col-xs-6 text-right">
          <div class="text-center">
              <Strong>
                  <hr>Signature
              </Strong>
          </div>
      </div>
  </div>
  <p>This is system generated invoice.Errors and omissions are expected</p>
</div>
@endsection

@section('script')

    <script>
          
  $(document).ready(function () {
    
      $('.print').on('click', function () {
            printDiv();
        })


        function printDiv() {

            var divToPrint = document.getElementById('divToPrint');

            var newWin = window.open('service/print', 'Print-Window');

            newWin.document.open();

            newWin.document.write('<html>' +
                '<head>' +
                '<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">' +
                '</head>' +
                '<body>' +
                divToPrint.innerHTML +
                '</body>' +
                '</html>');


            setTimeout(function () {
                newWin.print();
                newWin.close();
            }, 60);

        }
        
   
    
  })
    </script>
@endsection