@extends('layouts.master')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>


@endsection 
@section('content')
<br>
                        <div class="module">
                            <div class="module-head">
                                <h3>List of All Monographs</h3>
                            </div>
              <div class="module-body">

                                   <table class="table table-striped table-bordered table-condensed">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Student Name</th>
                                      <th>Faculty</th>
                                      <th>Monograph Topic</th>
                                      <th>Monograph</th>
                                      <th>Action</th>
      
                                    </tr>
                                  </thead>

       @foreach ($monographs as $key => $monograph)
                  <tbody>
                          <tr>


                           
        <td>{{ ++$i }}</td>
        <td>{{ $monograph->name }}</td>
        <td>{{ $monograph->faculty }}</td>
        <td>{{ $monograph->subject }}</td>
         <td><a href='{{ asset("uploads/$monograph->book_file_name") }}' style="color:lightblue">{{ $monograph->book_file_name }}</a></td>
		  <td>
                            <button class="btn" type="button">
							<a href="{{ route('monograph.show',$monograph->id) }}"><i class="icon-eye-open"></i></a> </button>
                             <button class="btn" type="button">
							 <a href="{{ route('monograph.edit',$monograph->id) }}"> <i class="icon-edit"></i></a></button>
                                    {!! Form::open(['method' => 'DELETE','route' => ['monograph.destroy', $monograph->id],'style'=>'display:inline']) !!}
                                    {{ Form::button('<i class="icon-trash"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
                                    {!! Form::close() !!}
                                             
                            </td>
							
                                             
                          </tr>
                        </tbody>
                            @endforeach
                </table>
            
              </div>
            </div>

@endsection
