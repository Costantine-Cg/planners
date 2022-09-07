@extends('layouts.master')
@section('title', 'Upload Files')
@section('content')
<div class="px-6">
    <h3 class="dash">Upload File(s)</h3>
</div>
<div class="card mt-5 px-3 py-3 mx-5 my-5">
     <div class="card-body">
        <form method="post" action="">
            @csrf
            @if(Session::has ('success') )
            <div class="alert alert-success"> {{Session::get('success')}}</div>
            @endif @if(Session::has ('fail') )
            <div class="alert alert-danger" id="alerts"> {{Session::get('fail')}}</div>
            @endif
            <div class="mb-3">
                <input type="text" class="form-control" name="firstname" hidden>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control"  name="lastname" hidden>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nida" hidden>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" hidden>
            </div>
            <div class="mb-3">
                <input type="phone" class="form-control" name="phone" hidden>
            </div>
            <label>Choose file</label>
            <div class="mb-3">
                <input type="file" class="form-control" name="file">
                <span class="text-danger">@error('file') {{$message}} @enderror</span>
            </div>
             <label>Descriptions</label>
            <div class="mb-3">
                <textarea class="form-control" rows="3" name="descriptions"></textarea>
                <span class="text-danger">@error('descriptions') {{$message}} @enderror</span>
            </div>
            <div class="text-center">
                <button class="btn bg-gradient-info w-100 mt-4 mb-0">Upload file</button>
            </div>
        </form>
    </div>

@endsection

