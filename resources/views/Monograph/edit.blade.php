@extends('layouts.master')
 
@section('content')
 <div class="module">
                            <div class="module-head">
                                <h3>Edit Monograph</h3>
            </div>    
            <div class="panel-body" >

                           
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="module-body">

                      {!! Form::model($monograph, ['method' => 'PATCH','class' => 'form-horizontal row-fluid','route' => ['monograph.update', $monograph->id]]) !!}
                     
                            <div class="control-group">
                                            <label class="control-label" for="basicinput">Student Name</label>
                                            <div class="controls">
                                 {!! Form::text('name', null, array('placeholder' => 'Student Name','class' => 'span8')) !!}
                            </div>
                        </div>
                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Faculty</label>
                                            <div class="controls">
                                  {!! Form::text('faculty', null, array('placeholder' => 'Faculty','class' => 'span8')) !!}
                            </div>     
                        </div>
                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Monograph Topic</label>
                                            <div class="controls"> 
                                  {!! Form::text('subject', null, array('placeholder' => 'Monograph Subject','class' => 'span8')) !!}
                            </div>
                        </div>

                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Upload Monograph</label>
                                            <div class="controls"> 
                               <input type="file" name="book_file_name" id="file">
                            </div>
                        </div>
                       
                        <div class="control-group">          
                            <div class="aab controls col-md-4 "></div>
                           <div class="controls">
                                <button type="submit" class="btn btn-info">Edit</button>
                            </div>
                        </div> 
               {!! Form::close() !!}   
            </div>
        </div></div>         
 
@endsection





