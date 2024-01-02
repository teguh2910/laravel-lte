@extends('layouts.app')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List APR</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">          
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Supplier</th>
                          <th>Nama Dokumen</th>
                          <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $data)
                        <tr class="bg-default">                        
                          <td>{{ $data->supplier }}</td>
                          <td>{{ $data->nama }}</td>
                          <td><a href="{{ $data->file }}" class="btn btn-xs btn-success">View</a></td>                                                  
                        </tr>
                        @endforeach
                        </tbody>                  
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>                           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  
@endsection