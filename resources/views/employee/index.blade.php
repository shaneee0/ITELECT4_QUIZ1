@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <a href="{{ route('employee.create') }}" class="btn btn-info">Add New Employee</a>
        <div class="row">

       
                <div class="card-head">
                     
                </div>

                <div class="card-body">

                    

                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Zip</th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach($employees as $item)
                                 <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->fname}}</td>
                                <td>{{$item->lname}}</td>
                                <td>{{$item->midname}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->zip}}</td>
                                <td>
                                    <span class="badge bg-success">
                                        <a href="{{ route('employee.edit',$item->id)}}" class="btn btn-success">Edit</a>
                                    </span>
                                    <span class="badge bg-danger">
                                        <a href="{{ route('employee.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                                    </span>
                                </td>

                               
                            </tr>
                           @endforeach
                        </tbody>

                    </table>
                </div>
                    

                <div class="card-footer">
                    
                </div>
             

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection