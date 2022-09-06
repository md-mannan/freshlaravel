@extends('layout.app')
@section('title','Delete Customer');




@section('content')
    



<div class="row">
    <div class="col-md-12">

        <div class="container">
            <div class="row py-3 panel bg-light p-0">
                <div class="col-md-6">
                    <h3>Update Customer</h3>
                </div>
                <div class="col-md-6">
                    <a href="" class="btn btn-danger">Back To Home</a>
                </div>
            </div>
        </div>


        <div style="max-width: 750px;margin: 0 auto;" class="my-3">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" id="id" class="form-control" placeholder="User ID"
                    aria-label="id" aria-describedby="basic-addon1">
            </div>
           
            <div class="button-group">
                <button class="btn btn-danger" onclick="deleteData();">Delete</button>
                
             </div>
        </div>





    </div>
</div>





@endsection