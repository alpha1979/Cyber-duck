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
                <h6 class="card-title">Something else is coming here</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                
              </div>
            </div>

        </div>
        
       
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection