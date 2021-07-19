@extends('layouts.master')
@section('adminlte')
            <div class="card-header">
                <h5 class="m-0">Company Information</h5>
              </div>
              <div class="card-body">
                <div>
                    <a href="{{route('companies.create')}}" class="btn btn-success mb-3">Create Company</a>
                </div>
                @if (empty($companies))
                    <div class="alert alert-warning">
                        The Company information is empty
                    </div>
              
                    @else
                 <div class=" table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">
                                Id
                            </th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company Logo</th>
                            <th scope="col">Website</th>
                            <th scope="col">Actions</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach ($companies as $company)
                                    
                               
                          
                            <tr>
                                <th scope="row">{{$company->id}}</th>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td><img height="100" width="100" src="{{asset('/storage/images/logos/'.$company->logo)}}" alt="{{$company->name}}" ></td>
                                <td>{{$company->website}}</td>
                                
                                <td> <a href="{{route('companies.show',['company'=>$company->id])}}" class="btn btn-link">Show</a> |
                                    <a href="{{route('companies.edit',['company'=>$company->id])}}" class="btn btn-link">Edit</a> 
                                    <form class="d-inline" method="POST" action="{{route('companies.destroy',['company'=>$company->id])}}">
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
                {{$companies->links('pagination::bootstrap-4')}}
              </div>
              @endif  
@endsection

    