@extends('layouts.master')
@section('adminlte')
<div class="card-header">
    <h5 class="m-0">Employee Information</h5>
  </div>
  <div class="card-body">
    <div>
<form method="POST" action="{{ route('employees.update',['employee'=>$employee->id]) }}">
    @csrf
    @method("PUT")
    <div class="form-row">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{old('first_name') ?? $employee->first_name}}" class="form-control" required/>
    </div>
    <div class="form-row">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{old('last_name') ?? $employee->last_name}}" class="form-control" required/>
    </div>
  
    <div class="form-row">
        <label for="company_id">Company ID</label>
        <input type="number" value="{{old('company_id') ?? $employee->company_id}}" name="company_id" class="form-control" required/>
    </div>
    <div class="form-row">
        <label for="email">Email</label>
        <input type="email" value="{{old('email')?? $employee->email}}" name="email" class="form-control" required/>
    </div>
    <div class="form-row">
        <label for="phone">Phone</label>
        <input type="text" value="{{old('phone')?? $employee->phone}}" name="phone" class="form-control" />
    </div>
   <div class="form-row mt-3">
    <button type="submit" class="btn btn-primary btn-lg">Update Employee</button>
    <a href="{{route('employees.index')}}" class="btn btn-primary btn-lg ml-3">Go Back</a>
</div>
</form>
@endsection