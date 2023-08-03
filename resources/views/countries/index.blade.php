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
                        <h5 class="title">{{__(" countries")}}</h5>
                        <a class="btn btn-primary" href="{{route('countries.create')}}">Create New country</a>
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <td> Name</td>
                            <td> Code</td>
                            <td> Action</td>
                           

                        </thead>
                        <tbody>
                           
                            @foreach($countries as $country)
                            <tr>
                            <td> {{$country->name}}</td>
                            <td> {{$country->code}}</td>

                       
                            <td style="display:flex">
                                                <a href="{{ route('countries.edit', $country->id) }}"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('countries.destroy', $country->id) }}" method="post">
                                                   @method('DELETE')
                                                   @csrf 
                                                   <button onClick="return confirm('Delete This country.?')" type="submit"><i class="fa fa-trash"></i></button>
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

