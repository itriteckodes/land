@extends('layouts.agent')

@section('content')
<div class="row">
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total Properties</h5>
            <span class="h2 font-weight-bold mb-0">{{App\Models\Property::all()->count()}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
              <i class="ni ni-active-40"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">

        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total Plots</h5>
            <span class="h2 font-weight-bold mb-0">{{App\Models\Plot::all()->count()}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
              <i class="ni ni-chart-pie-35"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">

        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card card-stats">
      <!-- Card body -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Your Leads</h5>
            <span class="h2 font-weight-bold mb-0">0</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
              <i class="ni ni-money-coins"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-sm">

        </p>
      </div>
    </div>
  </div>

</div>
@endsection