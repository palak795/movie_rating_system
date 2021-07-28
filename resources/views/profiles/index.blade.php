@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <!--BEGIN content-->
    <style>
        .layout_btns {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
    <div class="row">
        <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Details</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
                <div class="breadcrumb-wrapper mr-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('movie.editprofile')}}">Update Profile</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('movie.create')}}">Add new</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('movie.index')}}">List</a>
                        </li>
                    </ol> 
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!--Form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" >
                            <div class="card-title layout_btns" id="basic-layout-form">
                                <h3>List</h3>

                                <div class="btns-right-side">
                                           
                                 </div>
                        </div>
                        <!--Card Content start-->
                        <div class="card-content collapse show">
                            <div class="card-body">
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ \Session::get('success') }}
                                    </div>
                                @endif
                                @if (\Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ \Session::get('error') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                     {{-- <form class="form" action="{{route('computers.multi-delete')}}" method="POST" id="{{'delete_all'}}">
                                        @csrf --}}
                                        <div style="overflow:auto">
                                        <table class="table table-striped table-bordered zero-configuration" id="details"
                                            style="width: 100%; display: table;">
                                            <thead>
                                                <tr>
    {{-- <th><input type="checkbox" name="" class="checkboxes" id="checkAll" /> </th> --}}                                        
                                                    <th>id</th>
                                                    <th>Movie_Title</th>
                                                    <th>Movie_Name</th>
                                                    <th>Movie_Description</th>
                                                    <th>File</th>
                                                    <th>Action</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                            </tbody>
                                            <tfoot>
                                                <tr>
        {{-- <th><input type="checkbox" name="" class="checkboxes" id="checkAll" /> </th> --}}
                                                    <th>id</th>
                                                    <th>Movie_Title</th>
                                                    <th>Movie_Name</th>
                                                    <th>Movie_Description</th>
                                                    <th>File</th>
                                                    <th>Action</th> 
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
                                    </form>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')

    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript">
    </script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('https://unpkg.com/promise-polyfill')}}" type="text/javascript"></script>

    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.js') }}" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->
    
    <script>
        $(document).ready(function() {
            // Data table for serverside
            $('#details').DataTable({
                "pageLength": 10,
                "order":[
                    [0,'desc']
            ],
                
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('get.movie_details') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: "{{ csrf_token() }}",
                         route: '{{ route('movie.index') }}'
                    }
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "movie_title"
                    },
                    {
                        "data": "movie_name"
                    },
                    {
                        "data": "movie_description"
                    },
                    {
                        "data": "file"
                    },
                    {
                        "data": "action"
                    }
                ],
                aoColumnDefs: [{
                    bSortable: false,
                    aTargets: [-1, 0]
                }]
            });
        });

    </script>
    <script src="{{ asset('dist/js/scripts.js') }}" type="text/javascript"></script>
@endsection
