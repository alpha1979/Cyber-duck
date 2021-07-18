@extends('layouts.master')
@section('adminlte')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
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
                           
                                
                          
                            <tr>
                                <td>1</td>
                                <td>Cyber duck</td>
                                <td>cyberduck@gmail.com</td>
                                <td>Logo</td>
                                <td>website</td>
                                
                                <td> <a href="#" class="btn btn-link">Show</a> |
                                    <a href="#" class="btn btn-link">Edit</a> 
                                   
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                
              </div>
            </div>

        </div>
        
       
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

    