@extends('layouts.app', [
    'namePage' => 'Dashboard shipper',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  <div class="panel-header panel-header-sm">
    @php
  $status = array("Packages for Estimation", "Placed", "Accepted By Shipping Company", "Shipping", "In-Transit", "Arrived at Destination", "Out of Delivery", "Ready to Pick Up", "Delivered", "Picked-up", "Cancelled");
@endphp
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
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