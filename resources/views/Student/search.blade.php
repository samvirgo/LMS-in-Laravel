@extends('layout.master')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
@endsection 
@section('content')

<br>
         {{-- Search Start Here --}}
      
 <nav class="navbar navbar-default">
        <div class="nav nav-justified navbar-nav">
     {!! Form::open(['method'=>'GET','url'=>'search','class'=>'navbar-form navbar-search','role'=>'search']) !!}


 <div class="input-group">
                
                    <input type="text" class="form-control" name="search"  size="100" placeholder="Search by ID....">
                
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-search btn-default">
                      <span class="glyphicon glyphicon-search"></span>
                        </button>
                         
                         
                    </div>
                </div> 
    {!! Form::close() !!}
         
        </div>
    </nav>
    {{-- Search End Here --}}

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">List of Students</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                       
                    <th><em class="fa fa-cog"></em>Action</th>
                     <th class="hidden-xs">ID</th>
                                   
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            </tr> 
                          </thead>

         @foreach ($students as $key => $student)
                  <tbody>
                          <tr>


                           <td width="20%">
            <a class="btn btn-info btn-xs" href="{{ route('student.show',$student->id) }}">Show</a>
            <a class="btn btn-primary btn-xs" href="{{ route('student.edit',$student->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['student.destroy', $student->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
            {!! Form::close() !!}
        </td>
       <td>{{ $student->id}}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
         <td>{{ $student->phone }}</td>
        <td>{{ $student->position }}</td>
                          </tr>
                        </tbody>
                            @endforeach
                </table>
            
              </div>
            </div>
 {!! $students->render() !!}
@endsection