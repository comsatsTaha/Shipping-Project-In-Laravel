@extends('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages',
    'activePage' => 'pakages',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Create Packages")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('package.create') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              
              @include('alerts.success')
              <div class="row">
              </div>
                <div class="row">
                  <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label style="color:black;">{{__("Shipping Company")}}</label>
                            
                            <select name="shop_id" class="form-control"  required> 
                              <option selected="true"  disabled="disabled"> Select Shipping Company </option>
                              @foreach ($shipper as $item)
                              <option value="{{$item->id}}"> {{$item->name}}</option>
                              @endforeach
                              
                            
                            </select>
                            @include('alerts.feedback', ['field' => 'name'])
                    </div>
                </div>

                <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label style="color:black;">{{__("Shipping Company")}}</label>
                            
                            <select name="ship_id" class="form-control"  required> 
                              <option selected="true"  disabled="disabled"> Select Ship </option>
                              @foreach ($ships as $item)
                              <option value="{{$item->id}}"> {{$item->name}}</option>
                              @endforeach
                              
                            
                            </select>
                            @include('alerts.feedback', ['field' => 'name'])
                    </div>
                </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black">{{__("Sender Name")}}</label>
                                <input type="text" name="sender_name" class="form-control"  required>
                                @include('alerts.feedback', ['field' => 'sender_name'])
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black">{{__("Sender Phone No")}}</label>
                                <input type="tel" name="sender_phone_no" class="form-control"  required >
                                @include('alerts.feedback', ['field' => 'sender_phone_no'])
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label style="color:black;" for="exampleInputEmail1">{{__("Sender Address")}}</label>
                      <input type="text" name="sender_street" class="form-control"  required>
                      @include('alerts.feedback', ['field' => 'sender_street'])
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label style="color:black;" for="exampleInputEmail1">{{__("Sender City")}}</label>
                      <input type="text" name="sender_city" class="form-control" required>
                      @include('alerts.feedback', ['field' => 'sender_city'])
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label style="color:black;" for="exampleInputEmail1">{{__("Sender Province")}}</label>
                      <input type="text" name="sender_province" class="form-control"  required >
                      @include('alerts.feedback', ['field' => 'sender_province'])
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label style="color:black;" for="exampleInputEmail1">{{__("Sender Postcode")}}</label>
                      <input type="number" min="0" name="sender_postcode" class="form-control"  required >
                      @include('alerts.feedback', ['field' => 'sender_postcode'])
                    </div>
                  </div>
                </div>
                {{-- Reciver --}}
                <div class="row">
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black">{{__("Reciver Name")}}</label>
                              <input type="text" name="reciver_name" class="form-control"   required>
                              @include('alerts.feedback', ['field' => 'reciver_name'])
                      </div>
                  </div>
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black">{{__("Reciver Phone No")}}</label>
                              <input type="tel" name="reciver_phone_no" class="form-control"  required>
                              @include('alerts.feedback', ['field' => 'reciver_phone_no'])
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Address")}}</label>
                    <input type="text" name="reciver_street" class="form-control"   required>
                    @include('alerts.feedback', ['field' => 'reciver_street'])
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Reciver City")}}</label>
                    <input type="text" name="reciver_city" class="form-control" required >
                    @include('alerts.feedback', ['field' => 'reciver_city'])
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Province")}}</label>
                    <input type="text" name="reciver_province" class="form-control"  required>
                    @include('alerts.feedback', ['field' => 'reciver_province'])
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Reciver Postcode")}}</label>
                    <input type="number" min="0" name="reciver_postcode" class="form-control"  required>
                    @include('alerts.feedback', ['field' => 'reciver_postcode'])
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-check">
                    <label style="color:black;" class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="wants_contact_before_delivery">
                      <span class="form-check-sign">Call Reciver Before Delivery</span>
                    </label>
                  </div>
                </div>
              </div>
              {{-- Height width --}}
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Height")}}</label>
                    <input type="number" min="0" name="height" class="form-control"   required>
                    @include('alerts.feedback', ['field' => 'height'])
                  </div>
                </div>
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Width")}}</label>
                    <input type="number" min="0" name="width" class="form-control"   required>
                    @include('alerts.feedback', ['field' => 'width'])
                  </div>
                </div>
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Parcel Length")}}</label>
                    <input type="number" min="0" name="length" class="form-control"  required >
                    @include('alerts.feedback', ['field' => 'length'])
                  </div>
                </div>
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label style="color:black;" for="exampleInputEmail1">{{__("Comment")}}</label>
                    <textarea name="content" class="form-control"  cols="5" placeholder="Insert Additional Comments"></textarea>
                    @include('alerts.feedback', ['field' => 'content'])
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Save')}}</button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
         
          
      </div>
    </div>
  
    </div>
  </div>
@endsection