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
                <div class="panel-title">Add a New Book</div>
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

                    {!! Form::open(array('route' => 'book.store','method'=>'POST', 'files' => true)) !!}
                     
                        <div  class="form-group required" >
                            <label  class="control-label col-md-4  requiredField"> Category<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                 {!! Form::text('category', null, array('placeholder' => 'Category','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div  class="form-group required">
                            <label  class="control-label col-md-4  requiredField"> Book Title<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                  {!! Form::text('name', null, array('placeholder' => 'Book Title','class' => 'form-control')) !!}
                            </div>     
                        </div>
                        <div  class="form-group required">
                            <label  class="control-label col-md-4  requiredField">Copyright <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                  {!! Form::text('copyright', null, array('placeholder' => 'Copyright for the Book','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div  class="form-group required"> 
                            <label class="control-label col-md-4  requiredField"> Author<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                {!! Form::text('author', null, array('placeholder' => 'Author','class' => 'form-control')) !!}
                            </div>
                        </div>
                     
                      <div  class="form-group required"> 
                            <label  class="control-label col-md-4  requiredField"> No of Books<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                               {!! Form::number('book_no', null, array('placeholder' => 'No of Book','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div  class="form-group required"> 
                            <label  class="control-label col-md-4  requiredField"> ISBN<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                               {!! Form::number('isbn', null, array('placeholder' => 'ISBN for the Book','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div  class="form-group required"> 
                            <label  class="control-label col-md-4  requiredField"> Shelf No<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                               {!! Form::number('shelf_no', null, array('placeholder' => 'Shelf No','class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group "> 
                            <label class="control-label col-md-4 "> Upload the Book</label> 
                            <div class="controls col-md-8 "> 
                               <input type="file" name="book_file_name" id="file">
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



