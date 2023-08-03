@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-sm">
    @php
    $status = array("Packages for Estimation", "Placed", "Accepted By Shipping Company", "Shipping", "In-Transit", "Arrived at Destination", "Out of Delivery", "Ready to Pick Up", "Delivered", "Picked-up", "Cancelled","Total Users ","Total Active Clients","Total In Active Clients", "Total Active Shippers", "Total In Active Shippers","Pending For Approvel (New Shippers)");
  @endphp
  </div>
  <div class="content">

    <div class="row">
      <div class="col-md-6">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Shipping Details</h5>
            <h4 class="card-title">Shipping Status</h4>
          </div>
          <div class="card-body ">
            <div class=" table-responsive">
              <table class="table">
                <tbody>
                  @for ($i=0; $i<=10; $i++ )
                  <tr>
                    <td class="">{{$status[$i]}}</td>
                    <td class="">
                     {{$data[$i]}}
                    </td>
                  </tr>
                  
                @endfor
               
               
                    
                    
                    
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated Few Minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">All User List</h5>
            <h4 class="card-title"> User Stats</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    User Type
                  </th>
                  <th>
                    No Of Users
                  </th>
                  
                </thead>
                <tbody>
                  @for ($i=11; $i<=16; $i++ )
                  <tr>
                    <td>
                      {{$status[$i]}}
                    </td>
                    <td>
                      {{$data[$i]}}
                    </td>
                    
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endpush