@extends('/layouts.master')
 
@section('content')
 
 <div class="module">
                            <div class="module-head">
                                <h3>Edit Book</h3>
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

                      {!! Form::model($book, ['method' => 'PATCH','class' => 'form-horizontal row-fluid','route' => ['book.update', $book->id]] ) !!}
                                        
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Book Category</label>
                                            <div class="controls">
                                 {!! Form::text('category', null, array('placeholder' => 'Category','class' => 'span8')) !!}
                            </div>
                        </div>

                        
                          <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Book Name</label>
                                            <div class="controls">
                                  {!! Form::text('name', null, array('placeholder' => 'Book Title','class' => 'span8')) !!}
                            </div>     
                        </div>
                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Copyright of Book</label>
                                            <div class="controls"> 
                                  {!! Form::text('copyright', null, array('placeholder' => 'Copyright for the Book','class' => 'span8')) !!}
                            </div>
                        </div>
                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Author Name</label>
                                            <div class="controls"> 
                                {!! Form::text('author', null, array('placeholder' => 'Author','class' => 'span8')) !!}
                            </div>
                        </div>
                     
                       <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Book Number</label>
                                            <div class="controls"> 
                               {!! Form::number('book_no', null, array('placeholder' => 'No of Book','class' => 'span8')) !!}
                            </div>
                        </div>

                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter ISBN of Book</label>
                                            <div class="controls"> 
                               {!! Form::number('isbn', null, array('placeholder' => 'ISBN for the Book','class' => 'span8')) !!}
                            </div>
                        </div>

                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Shelf No</label>
                                            <div class="controls"> 
                               {!! Form::number('shelf_no', null, array('placeholder' => 'Shelf No','class' => 'span8')) !!}
                            </div>
                        </div>

                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Upload Book</label>
                                            <div class="controls"> 
                               <input type="file" name="book_file_name" id="file">
                            </div>
                        </div>
                       
                        <div class="control-group">
                                            
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls"> 
                            
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="submit" class="btn btn-info"><a  href="{{ route('book.index') }}"> Cancel</a></button>
                            </div>
                        </div>
                       
                      
               {!! Form::close() !!}   
            </div>
        </div></div>         
 
@endsection



