@extends('layouts.admin')



@section('content')

<div id='DivIdToPrint' class="container d-none">

    <div class="card">

        <div class="card-header">

        </div>

        <div class="card-body">

            <div class="row container">
                <div class="col-sm-3">
                    <img src="{{asset('print/logo.png')}}" style="width:65%;" alt="">
                </div>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-3 mt-4">
                    <div class="row">
                        <div class="col-sm-5">
                            <span>Date : </span>
                        </div>
                        <div class="col-sm-7">
                            <span class="myFont">{{$payment->created_at->format('d-m-Y')}}</span><br>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="table-responsive-sm">
                <table class="table table-striped table-bordered">
                    <thead class="card-header">
                        <tr>
                            <th>First Name</th>
                            <th class="right">Last Name</th>
                            <th class="center">Salary</th>
                            <th class="right">Cnic</th>
                            <th class="right">Address</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>{{$payment->employee->fname}}</td>
                            <td>{{$payment->employee->lname}}</td>
                            <td>{{$payment->amount}}</td>
                            <td>{{$payment->employee->cnic}}</td>
                            <td>{{$payment->employee->address}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="row container">
                <div class="col-sm-4">

                </div>

                <div class="col-sm-5">

                </div>

                <div class="col-sm-3 text-center">
                    <br>
                    <hr>
                    <h6>Signature</h6>
                </div>

            </div>

            <p>This is a system generated sale.Errors and omissions are expected. </p>


        </div>

    </div>
</div>


@endsection

@section('script')


<script>
    printDiv();
    function printDiv() {
       
        var divToPrint=document.getElementById('DivIdToPrint');
       
        var newWin=window.open('Print-Window');
         newWin.document.open();
    
        newWin.document.write('<html><head><link rel="stylesheet" href="{{asset('print/bootstrap.min.css')}}"><link rel="stylesheet" href="{{asset('print/style.css')}}"></head><body>'+divToPrint.innerHTML+'</body></html>');
    
    
        setTimeout(function(){
            newWin.print();
            newWin.close();
            window.history.back();
        },1500);  
    }

    
</script>
@endsection