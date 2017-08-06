@extends('/layouts.master')
@section('style')
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>

@endsection

@section('content')

 <div class="module">
                            <div class="module-head">
                                <h3>Add Monograph</h3>
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
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	<div class="module-body">

                    {!! Form::open(array('route' => 'monograph.store','class' => 'form-horizontal row-fluid','method'=>'POST', 'files' => true)) !!}
                     
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
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div> 
               {!! Form::close() !!}   
            </div>
        </div></div>         
 
@endsection



