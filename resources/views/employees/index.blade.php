@extends('layouts.master')
@section('adminlte')
<div class="card-header">
    <h5 class="m-0">Employee Information</h5>
  </div>
  <div class="card-body">
    <div>
        <a href="{{route('employees.create')}}" class="btn btn-success mb-3">Add New Employee</a>
    </div>
    @if (empty($employees))
        <div class="alert alert-warning">
            The Employee information is empty
        </div>
  
        @else
     <div class=" table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                    Id
                </th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Company Id</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
                
                </tr>
            </thead>
            <tbody>
               
                    @foreach ($employees as $employee)
                        
                   
              
                <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{ucfirst($employee->first_name)}}</td>
                    <td>{{ucfirst($employee->last_name)}}</td>
                    <td>{{$employee->company_id}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>
                    
                    <td> <a href="{{route('employees.show',['employee'=>$employee->id])}}" class="btn btn-link">Show</a> |
                        <a href="{{route('employees.edit',['employee'=>$employee->id])}}" class="btn btn-link">Edit</a> 
                        <form class="d-inline" method="POST" action="{{route('employees.destroy',['employee'=>$employee->id])}}">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"> Delete </button>
                        </form>
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$employees->links('pagination::bootstrap-4')}}
  </div>
  @endif  
@endsection
