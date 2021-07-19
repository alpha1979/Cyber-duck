@extends('layouts.master')
@section('adminlte')
<div class="card-header">
    <h5 class="m-0">Companies Information</h5>
  </div>
  <div class="card-body">
    <div>
<form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
    @csrf
    
    <div class="form-row">
        <label for="name">Company Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control" required/>
    </div>
    
    <div class="form-row">
        <label for="email">Email</label>
        <input type="email" value="{{old('email')}}" name="email" class="form-control" required/>
    </div>
    <div class="form-row my-3">
        <label for="logo">Select Logo Image</label>
        <input type="file" name="logo" class="form-control-file" />
    </div>
    <div class="form-row ">
        <label for="website">Website</label>
        <input type="text" value="{{old('website')}}" name="website" class="form-control" />
    </div>
   <div class="form-row mt-3">
    <button type="submit" class="btn btn-primary btn-lg">Create Company</button>
    <a href="{{route('companies.index')}}" class="btn btn-primary btn-lg ml-3">Go Back</a>
   </div>
</form>

@endsection