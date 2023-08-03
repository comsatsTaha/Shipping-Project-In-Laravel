@extends('layouts.app', [
'class' => '',
'namePage' => 'Pakages Estimation Details',
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
                        <h5 class="title">{{ __('Packages Details') }}</h5>
                    </div>
                    <div class="card-body">


                        @include('alerts.success')
                        <div class="row">
                        </div>
                        <div class="row">

                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>{{ __('Sender Name') }}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $package_details->sender_name }}" disabled>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>{{ __('Sender Phone No') }}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $package_details->sender_phone_no }}" disabled>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Sender Address') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->sender_street }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Sender City') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->sender_city }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Sender Province') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->sender_province }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Sender Postcode') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->sender_postcode }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                        </div>
                        {{-- Reciver --}}
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>{{ __('Reciver Name') }}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $package_details->reciver_name }}" disabled>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>{{ __('Reciver Phone No') }}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $package_details->reciver_phone_no }}" disabled>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Reciver Address') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->reciver_street }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Reciver City') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->reciver_city }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Reciver Province') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->reciver_province }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Reciver Postcode') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->reciver_postcode }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" @if ($package_details->wants_contact_before_delivery == 1) checked @endif disabled>
                                        <span class="form-check-sign">Call Reciver Before Delivery</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- Height width --}}
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Parcel Height') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->height }} " disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Parcel Width') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value=" {{ $package_details->width }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Parcel Length') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ $package_details->length }}" disabled>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Comment') }}</label>
                                    <textarea name="content" class="form-control" cols="5" placeholder=""
                                        disabled>{{ $package_details->content }}</textarea>
                                    @include('alerts.feedback', ['field' => 'content'])
                                </div>
                            </div>
                        </div>

                        
                        @php
                            $lenght = count($track_record);
                            
                        @endphp
                        @shipper
                        @if ($lenght == 0)
                        <div class="row">
                            <form method="POST" action="{{route('package.qoute')}}" class="col-md-12">
                                @csrf
                                <input type="hidden" name="order_id" value="{{$package_details->id}}">
                            <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('Estimated Price') }}</label>
                            <input type="number" name="estmiated" min="0"
                            class="form-control" placeholder="Estimated Price">
                            </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Remarks') }}</label>
                                    <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks"
                                        ></textarea>
                                    @include('alerts.feedback', ['field' => 'remarks'])
                                </div>
                            </div>
                            </div>
                            <div class="card-footer ">
                            <button type="submit" class="btn btn-primary
                            btn-round">{{ __('Save') }}</button>
                            </div>
                            </form> 
                        @endif
                            @endshipper

                        @admin
                        
                        <div class="row">
                            <form method="POST" action="{{route('package.qoute')}}" class="col-md-12">
                                @csrf
                                <input type="hidden" name="order_id" value="{{$package_details->id}}">
                            <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('Estimated Price') }}</label>
                            <input type="number" name="estmiated" min="0"
                            class="form-control" placeholder="Estimated Price">
                            </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Remarks') }}</label>
                                    <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks"
                                        ></textarea>
                                    @include('alerts.feedback', ['field' => 'remarks'])
                                </div>
                            </div>
                            </div>
                            <div class="card-footer ">
                            <button type="submit" class="btn btn-primary
                            btn-round">{{ __('Save') }}</button>
                            </div>
                            </form> 
                        

                        @endadmin


                        
                        {{-- Track Record Display --}}
                        <hr class="half-rule" />
                        <h5 class="title">{{ __('Quotations by Shipping Company') }}</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Estimate Shipping Price
                                    </th>
                                    <th>
                                        Remarks
                                    </th>
                                    @client
                                    <th class="text-right">
                                        Action
                                    </th>
                                    @endclient
                                </thead>
                                <tbody>
                                    @foreach ($track_record as $record)
                                        <tr>
                                            <td>
                                                {{ $record->shipping }}
                                            </td>
                                            <td>
                                                {{ $record->est_price }}
                                            </td>
                                            <td>
                                                {{ $record->remarks }}
                                            </td>
                                            @client
                                            <td class="text-right">
                                                <a class="btn btn-primary btn-round text-white pull-right"
                                                    href="/place-order/{{ $record->id }}">Place Order</a>
                                            </td>
                                            @endclient
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
@endsection
