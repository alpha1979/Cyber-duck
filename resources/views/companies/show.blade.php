@extends('layouts.master')
@section('adminlte')
<div class="card m-2" style="width: 20rem;">
    <img class="card-img-top" src="{{asset('/storage/images/logos/'.$company->logo)}}" alt="{{$company->name}}" >
    <div class="card-body">
      <h5 class="card-title">{{$company->name}}</h5>
      
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Email: {{$company->email}}</li>
      <li class="list-group-item">Website: {{$company->website}}</li>
      
    </ul>
    <div class="card-body">
      <a href="{{route('companies.index')}}" class="btn btn-primary btn-lg ml-3">Go Back</a>
     
    </div>
  </div>
</div>
@endsection