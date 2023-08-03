@extends('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages Estimation',
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
            <h5 class="title">{{__(" Create Ship")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('ships.store') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              
              @include('alerts.success')
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;">{{__("Ship Name")}}</label>
                                <input type="text" name="name" class="form-control"  required>
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;">{{__("Type")}}</label>
                            <select class="form-control" name="type">
                              <option value="Import">Import</option>
                              <option value="Export">Export</option>
                              <option value="Both">Both</option>
                            </select>
                                @include('alerts.feedback', ['field' => 'sender_phone_no'])
                        </div>
                    </div>
                </div>


                <div class="row">
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black;">{{__("Price From:")}}</label>
                              <input type="number" name="price_from" class="form-control"  required>
                              @include('alerts.feedback', ['field' => 'sender_name'])
                      </div>
                  </div>
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black;">{{__("Price To")}}</label>
                              <input type="number" name="price_to" class="form-control"  required >
                              @include('alerts.feedback', ['field' => 'price_to'])
                      </div>
                  </div>
              </div>
              <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
              <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
              <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label style="color: black;">{{__("Countries:")}}</label>
                          <select class="form-control" name="country_id[]" multiple>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                          </select>
                            @include('alerts.feedback', ['field' => 'sender_name'])
                    </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                      <label style="color: black;font-size:20px" >{{__("Image")}}</label>
                          <input type="file" name="image" class="form-control"  required >
                          @include('alerts.feedback', ['field' => 'price_to'])
                  </div>
              </div>
                
            </div>

              {{-- Height width --}}
              
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