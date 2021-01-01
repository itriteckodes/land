<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/brand/favicon.pn')}}g" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
    type="text/css">
  <link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.1.0')}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">
  @yield('styles')

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{(Request::is('admin/agent*'))? 'active': ''}}" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="navbar-examples">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Agents</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item {{(Request::is('admin/agent/create'))? 'active': ''}}">
                    <a href="{{route('admin.agent.create')}}" class="nav-link">Add New</a>
                  </li>
                  <li class="nav-item {{(Request::is('admin/agent'))? 'active': ''}}">
                    <a href="{{route('admin.agent.index')}}" class="nav-link">View All</a>
                  </li>
               
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link {{(Request::is('admin/service*'))? 'active': ''}}" href="#navbar-h" data-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="navbar-examples">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Services</span>
              </a>
              <div class="collapse" id="navbar-h">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item {{(Request::is('admin/service/create'))? 'active': ''}}">
                    <a href="{{route('admin.service.create')}}" class="nav-link">Add New</a>
                  </li>
                  <li class="nav-item {{(Request::is('admin/service'))? 'active': ''}}">
                    <a href="{{route('admin.service.index')}}" class="nav-link">View All</a>
                  </li>
               
                </ul>
              </div>
            </li>

            <li class="nav-item {{(Request::is('admin/lead/*'))? 'active':''}}">
              <a class="nav-link " href="#navbar-leads" data-toggle="collapse" role="button" aria-expanded="false"
                aria-controls="navbar-plots">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Leads</span>
              </a>
              <div class="collapse" id="navbar-leads">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item {{(Request::is('admin/lead/plots'))? 'active':''}}">
                    <a href="{{route('admin.lead_plots')}}" class="nav-link">plots</a>
                  </li>
                  <li class="nav-item {{(Request::is('admin/lead/properties'))? 'active':''}}">
                    <a href="{{route('admin.lead_properties')}}" class="nav-link">properties</a>
                  </li>
                  
                  <li class="nav-item {{(Request::is('admin/lead/services'))? 'active':''}}">
                    <a href="{{route('admin.lead_services')}}" class="nav-link">services</a>
                  </li>
               
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact_index')}}">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Queries by customer</span>
              </a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.profile')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.logout')}}">
                <i class="ni ni-user-run"></i>
                <span class="nav-link-text">logout</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            {{-- <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> --}}
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="" src="{{Auth::user()->image}}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{route('admin.profile')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                {{-- <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a> --}}
                <div class="dropdown-divider"></div>
                <a href="{{route('admin.logout')}}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
           
          </div> 
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6" style="width:100% !important">

      @yield('content')


    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  {{-- <script src="{{asset('assets/js/demo.min.js')}}"></script> --}}
  <script src="{{asset('toastr/toastr.min.js')}}"></script>

  @toastr_render

  @yield('script')
</body>

</html>