<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Recruitment') }}</title>
  
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="{{ mix('css/paper-dashboard.css') }}" rel="stylesheet">
</head>
<body>
  <div class="wrapper " id="app">
    <div class="sidebar" data-color="black" data-active-color="primary">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
        </a>
        <a href="#" class="simple-text logo-normal">
          Recruitment
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li :class="{ 'active': $route.path == '/dashboard' }">
            <router-link to="/dashboard">
              <i class="fas fa-chalkboard"></i>
              <p>Dashboard</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/ribshack' }">
            <router-link to="/ribshack">
              <i class="fas fa-utensils"></i>
              <p>Ribshack</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/delcom' }">
            <router-link to="/delcom">
              <i class="fas fa-tools"></i>
              <p>Delcom</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/ramx' }">
            <router-link to="/ramx">
              <i class="fas fa-cube"></i>
              <p>Ramx</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/screening' }">
            <router-link to="/screening">
              <i class="fas fa-clipboard"></i>
              <p>Screening</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/requirements' }">
            <router-link to="/requirements">
              <i class="fas fa-paperclip"></i>
              <p>Requirements</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/man_power_request' }">
            <router-link to="/man_power_request">
              <i class="fas fa-paper-plane"></i>
              <p>Man Power Request</p>
            </router-link>
          </li>
          <li :class="{ 'active': $route.path == '/applicant' }">
            <router-link to="/applicant">
              <i class="fas fa-user-circle"></i>
              <p>Applicant</p>
            </router-link>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            {{-- {{ Auth::user()->name }} --}}
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <router-view></router-view>
      </div>
    </div>
  </div>
  
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ mix('js/paper-dashboard.min.js') }}"></script>
</body>
</html>