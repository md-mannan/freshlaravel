@extends('layout.app')
@section('title','Customer List');




@section('content')
    






<div class="row">
    <div class="col-md-12">
        
        <div class="container">
            <div class="row py-3 panel bg-light p-0">
                <div class="col-md-6">
                    <h3>Customer List</h3>
                </div>
                <div class="col-md-6">
                    <a href="" class="btn btn-danger" >Remove All</a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataKey as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>
                        <div class="button-group">
                            <a href="{{url('edit')}}/{{$data->id}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('delete')}}/{{$data->id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>





    </div>
</div>
















@endsection