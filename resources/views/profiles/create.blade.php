  
@extends('layouts.main')
@section('content')

<div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <form enctype="multipart/form-data" method="post" action="{{route('movie.store')}}">
      @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Movie_Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Movie_Title" name="movie_title">
                  </div>
                      @error('movie_title')
                          <span class="text-danger">{{$message}}</span>
                      @enderror

                  <div class="form-group">
                    <label for="exampleInputPassword1">Movie_Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Movie_Name" name="movie_name">
                  </div>
                   @error('movie_name')
                          <span class="text-danger">{{$message}}</span>
                      @enderror


                  <div class="form-group">
                    <label for="exampleInputPassword1">Movie_Description</label>
                         <textarea name = "movie_description" cols= "10" rows = "5" class="form-control" id="exampleInputPassword1" placeholder="Movie_Description"></textarea>
                  </div>
                   @error('movie_description')
                          <span class="text-danger">{{$message}}</span>
                      @enderror


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>

                    <div class="input-group">

                      <div class="custom-file">

                        <input type="file" class="custom-file-input" id="exampleInputFile" name = "file">

                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                      </div>


                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>

                    </div>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>

                   @error('file')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
              </form>
            </div>

      @endsection      
            <!-- /.card -->