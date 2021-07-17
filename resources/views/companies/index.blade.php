@extends('layouts.master')
@section('adminlte')
<div class="alert alert-warning">
    The product page is empty
</div>

@else
    <div class=" table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                Id
            </th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Company Logo</th>
            <th>Website</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                
          
            <tr>
                <td>1</td>
                <td>Cyber duck</td>
                <td>cyberduck@gmail.com</td>
                <td>Logo</td>
                <td>website</td>
                
                <td> <a href="#" class="btn btn-link">Show</a> |
                    <a href="#" class="btn btn-link">Edit</a> 
                    <form class="d-inline" method="POST" action="#">
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
@endsection