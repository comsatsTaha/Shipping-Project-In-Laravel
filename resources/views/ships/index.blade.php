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
                        <a class="btn btn-primary" href="{{route('ships.create')}}">Create New Ship</a>
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <td>User Name: </td>
                            <td> Phone Number</td>
                            <td> Ship Name</td>
                            <td> Ship Type</td>
                            <td> Price form</td>
                            <td> Price To</td>
                            <td> Action</td>

                        </thead>
                        <tbody>
                           
                            @foreach($ships as $ship)
                            <tr>
                            <td> {{$ship->user->name}}</td>
                            <td> {{$ship->user->phone_no}}</td>

                            <td> {{$ship->name}}</td>
                            <td> {{$ship->type}}</td>
                            <td> {{$ship->price_from}}</td>
                            <td> {{$ship->price_to}}</td>
                            <td style="display:flex">
                                                <a href="{{ route('ships.edit', $ship->id) }}"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('ships.destroy', $ship->id) }}" method="post">
                                                   @method('DELETE')
                                                   @csrf 
                                                   <button onClick="return confirm('Delete This Ship.?')" type="submit"><i class="fa fa-trash"></i></button>
                                               </form>
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
 

@endsection

