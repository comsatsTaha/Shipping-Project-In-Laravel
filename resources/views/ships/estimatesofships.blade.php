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
                        <h5 class="title">{{__(" Ships")}}</h5>
                        
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <td> Ship Name</td>
                            <td> Ship Type</td>
                            <td> Price form</td>
                            <td> Price To</td>
                            <td> Action</td>

                        </thead>
                        <tbody>
                           
                            @foreach($ships as $ship)
                            <tr>
                            <td> {{$ship->name}}</td>
                            <td> {{$ship->type}}</td>
                            <td> {{$ship->price_from}}</td>
                            <td> {{$ship->price_to}}</td>
                            <td><a class="btn" href="{{route('createorder',$ship->id)}}"> Create Package</td>
                        </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
 

@endsection

