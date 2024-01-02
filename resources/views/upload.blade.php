@extends('layouts.app')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Upload Document</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload Document</li>
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
          <!-- /.col-md-12 -->
          <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Upload Document</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{asset('upload_apr')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">                                    
                  <div class="form-group">
                    <label>Supplier</label>
                    <input type="text" name="supplier" class="form-control" id="supplier">
                  </div>
                  <div class="form-group">
                    <label>Nama Dokument</label>
                    <input type="text" name="dokument" class="form-control" id="dokument">
                  </div>
                  <div class="form-group">
                    <label>Upload Dokument</label>
                    <input type="file" name="upload_dokument" class="form-control" id="upload_dokument">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  
@endsection