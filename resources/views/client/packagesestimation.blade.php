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
            <h5 class="title">{{__(" Estimation Of Package")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('estimatesofships') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              
              @include('alerts.success')
              <div class="row">
              </div>
            
              
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label style="color: black" for="exampleInputEmail1">{{__("Type")}}</label>
                    <select class="form-control" name="type">
                      <option value="Import">Import</option>
                      <option value="Export">Export</option>
                      <option value="Both">Both</option>
                    </select>
                    @include('alerts.feedback', ['field' => 'height'])
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label style="color: black" for="exampleInputEmail1">{{__("Country")}}</label>
                    <select class="form-control" name="country_id">
                      @foreach ($countries as $country)
                      <option value="{{$country->id}}">{{$country->name}}</option>
                      @endforeach
                    </select>
                    @include('alerts.feedback', ['field' => 'height'])
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label style="color: black" for="exampleInputEmail1">{{__("Price")}}</label>
                    <input class="form-control" type="text" name="price" /> 
                    @include('alerts.feedback', ['field' => 'height'])
                  </div>
                </div>
                
              </div>
              {{-- Height width --}}
              
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Search')}}</button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
         
          
      </div>
    </div>
  
    </div>
  </div>
@endsection