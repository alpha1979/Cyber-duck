@extends('layouts.master')
@section('adminlte')
<div class="card m-2" style="width: 20rem;">
    
    <div class="card-body">
      <h5 class="card-title">{{$employee->first_name}} {{$employee->last_name}}</h5>
      
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Company ID: {{$employee->company_id}}</li>
      <li class="list-group-item">Email: {{$employee->email}}</li>
      <li class="list-group-item">Phone: {{$employee->phone}}</li>
      
    </ul>
    <div class="card-body">
      <a href="{{route('employees.index')}}" class="btn btn-primary btn-lg ml-3">Go Back</a>
     
    </div>
  </div>
</div>
@endsection