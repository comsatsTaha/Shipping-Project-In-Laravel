@extends('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages Estimation List',
    'activePage' => 'pakages',
    'activeNav' => '',
])
@php
$array = array("","Placed","Accepted by Shipping Company","Shipping","In-Transit","Arrived at Destination","Out of Delivery","Ready to Pick Up","Delivered","Picked-up","Cancelled");
@endphp
@section('content')

  <div class="panel-header panel-header-sm">
    @include('alerts.errors')  
</div>
  <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
                @client
                <a class="btn btn-primary btn-round text-white pull-right" href="/package-estimation ">Add Package Estimation</a>
                @endclient
                <h4 class="card-title"> Packages List</h4>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sender Name
                      </th>
                      <th>
                        Sender City
                      </th>
                      <th>
                        Reciver Name
                      </th>
                      <th >
                        Reciver City
                      </th>
                     
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($order as $item)
                      <tr>
                        <td>
                          {{$item->sender_name}}
                        </td>
                        <td>
                          {{$item->sender_city}}
                        </td>
                        <td>
                          {{$item->reciver_name}}
                        </td>
                        <td >
                          {{$item->reciver_city}}
                        </td>
                        <td >
                          @clientandadmin
                          <a class="btn btn-primary btn-round text-white " data-id="{{$item->id}}" href="/package-estimation-details/{{$item->id}}">Details</a>
                        @endclientandadmin
                        @shipper
                        <a class="btn btn-primary btn-round text-white "  href="/package-estimation-qoute/{{$item->id}}">Details</a>
                        @endshipper
                        </td>
                      </tr>
                      @endforeach
                     
                   
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
  
    </div>
  </div>
@endsection