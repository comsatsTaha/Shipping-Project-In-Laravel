@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'User Edit',
    'activePage' => 'profile',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Edit Profile")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('userprofile.update',$user->id) }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('put')
              @include('alerts.success')
              <input type="hidden" name="id" value="{{$user->id}}">
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>{{__(" Name")}}</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                @include('alerts.feedback', ['field' => 'name'])
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label for="exampleInputEmail1">{{__(" Email address")}}</label>
                          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email}}">
                          @include('alerts.feedback', ['field' => 'email'])
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Phone Number")}}</label>
                      <input type="tel" name="phone_no" class="form-control" placeholder="Phone Number" value="{{ old('email', $user->phone_no) }}">
                      @include('alerts.feedback', ['field' => 'phone_no'])
                    </div>
                  </div>
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Role")}}</label>
                    @php
                    $user_role=array("","Admin","User","Shipper")
                    @endphp
                    <select class="form-control" name="status"> 
                        <option value="{{$user->role}}" selected="true"  disabled="disabled">{{$user_role[$user->role]}}</option>
                        <option value="1">{{$user_role[1]}}</option>
                        <option value="2">{{$user_role[2]}}</option>
                        <option value="3">{{$user_role[3]}}</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">{{__("Description")}}</label>
                        <textarea name="address" class="form-control" placeholder="Insert description">{{ old('address', $user->address) }}</textarea>
                        @include('alerts.feedback', ['field' => 'address'])
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">{{__("Active")}}</label>
                        <select class="form-control" name="status">
                          <option value="1" @if($user->status == "1") selected @endif>Active</option>
                          <option value="0" @if($user->status == "0") selected @endif>In Active</option>
                        </select>

                        @include('alerts.feedback', ['field' => 'address'])
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
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                <h5 class="title">{{ $user->name }}</h5>
              </a>
              <p class="description">
                  {{ $user->email }}
              </p>
            </div>
          </div>
          <hr>
          <div class="button-container">
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-facebook-square"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-google-plus-square"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection