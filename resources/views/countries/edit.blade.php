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
            <form method="post" action="{{ route('countries.update',$country->id) }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @include('alerts.success')
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;">{{__("Country")}}</label>
                                <input type="text" name="name" class="form-control" value="{{$country->name}}"  required>
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;">{{__("Code")}}</label>
                            <input type="text" name="code" class="form-control" value="{{$country->code}}"  required>
                                @include('alerts.feedback', ['field' => 'sender_phone_no'])
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