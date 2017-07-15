@extends('layout.master')
@section('style')
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>

@endsection

@section('content')  
            
    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Add a New Student</div>
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

                    {!! Form::open(array('route' => 'student.store','method'=>'POST','role'=>'form')) !!}
                     
                        <div class="form-group required">
                            <label  class="control-label col-md-4  requiredField"> Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                 {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}  
                            </div>
                        </div>
                        <div  class="form-group required">
                            <label  class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                  {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                            </div>     
                        </div>
                        <div  class="form-group required">
                            <label  class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                  {!! Form::password('password', null, array('placeholder' => 'Password','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div  class="form-group required"> 
                            <label  class="control-label col-md-4  requiredField"> Phone No<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                {!! Form::number('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
                            </div>
                        </div>
                     
                      <div class="form-group required"> 
                            <label  class="control-label col-md-4  requiredField"> Position<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                               {!! Form::text('position', null, array('placeholder' => 'Position','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div> 
               {!! Form::close() !!}   
            </div>
        </div></div>         
 
@endsection



