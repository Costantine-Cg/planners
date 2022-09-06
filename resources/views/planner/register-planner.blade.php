@extends('layouts.master')
@section('title', 'Register Planner')
@section('content')
<div class="px-6">
    <h3 class="dash">Register Planner</h3>
</div>
<div class=" card-body container-fluid py-5 px-5 mt-3 py">
    <div class="card">
     <div class="card-body">
        <form method="post" action="{{route('new')}}">
            @csrf
            @if(Session::has ('success') )
            <div class="alert alert-success"> {{Session::get('success')}}</div>
            @endif @if(Session::has ('fail') )
            <div class="alert alert-danger" id="alerts"> {{Session::get('fail')}}</div>
            @endif 
            <label>First Name</label>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="First Name" name="firstname">
                <span class="text-danger">@error('firstname') {{$message}} @enderror</span> 
            </div>
            <label>Last Name</label>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Last Name" 
                aria-describedby="password-addon" name="lastname">
                <span class="text-danger">@error('lastname') {{$message}} @enderror</span> 
            </div>
            <label>National ID Number</label>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="NIDA" 
                aria-describedby="password-addon" name="nida">
                <span class="text-danger">@error('nida') {{$message}} @enderror</span> 
            </div>
            <label>Email</label>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email"
                aria-describedby="email-addon" name="email">
                <span class="text-danger">@error('email') {{$message}} @enderror</span> 
            </div>
            <label>Phone Number</label>
            <div class="mb-3">
                <input type="phone" class="form-control" placeholder="Phone Number"
                aria-describedby="password-addon" name="phone">
                <span class="text-danger">@error('phone') {{$message}} @enderror</span> 
            </div>
            <label>Password</label>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password"
                aria-describedby="password-addon" name="password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span> 
            </div>
            <div class="text-center">
                <button class="btn bg-gradient-info w-100 mt-4 mb-0">Sign up</button>
            </div>
        </form>
    </div>
</div>
    

@endsection