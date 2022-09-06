@extends('layout.app')
@section('title','Create Customer');




@section('content')
    



<div class="row">
    <div class="col-md-12">

        <div class="container">
            <div class="row py-3 panel bg-light p-0">
                <div class="col-md-6">
                    <h3>Create Customer</h3>
                </div>
                <div class="col-md-6">
                    <a href="" class="btn btn-danger">Back To Home</a>
                </div>
            </div>
        </div>


        <div style="max-width: 750px;margin: 0 auto;" class="my-3">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Full Name</span>
                <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name"
                    aria-label="name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input type="text" id="username" class="form-control" placeholder="Enter Username"
                    aria-label="username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" id="email" class="form-control" placeholder="Email" aria-label="email"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone</span>
                <input type="text" id="phone" class="form-control" placeholder="Phone Number" aria-label="phone"
                    aria-describedby="basic-addon1">
            </div>
            <div class="button-group">
                <button class="btn btn-success" onclick="sendData();">Create</button>
                <button class="btn btn-danger" onclick="clearAll();">Clear</button>
             </div>
        </div>





    </div>
</div>



@endsection