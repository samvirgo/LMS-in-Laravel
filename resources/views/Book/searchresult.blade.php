@extends('/layouts.master')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
@endsection 
@section('content')



<br>
         {{-- Search Start Here --}}
                        <div class="module">
                            <div class="module-head">
                                <h3>Search Book</h3>
                            </div>
                            <div class="module-body">
 {!! Form::open(['method'=>'GET','url'=>'searchresult','class'=>'form-horizontal row-fluid','role'=>'search']) !!}
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Book Name</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8" name="search" placeholder="Search By Book Name">
                                                <button class="btn-info" type="submit">
                            <i class="icon-search"></i>
                        </button>
                                            </div>
                                        </div>
                                     {!! Form::close() !!}
                         
                        
                   </div>
               
  
    {{-- Search End Here --}}



                                   <table class="table table-striped table-bordered table-condensed">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Book category</th>
                    <th>Book Name</th>
                                      <th>Author Name</th>
                                      <th>Copyright of Book</th>
                                      <th>Number of Book</th>
                                      <th>ISBN of Book</th>
                                      <th>Shelf No</th>
                                       <th>Book</th>
                                      <th>Action</th>
      
                                    </tr>
                                 
                                  </thead>

       @foreach ($books as $key => $book)
                  <tbody>
                          <tr>


                                             
        <td>{{ ++$i }}</td>
        <td>{{ $book->category }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->copyright }}</td>
        <td>{{ $book->book_no }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->shelf_no }}</td>
         <td><a href='{{ asset("uploads/$book->book_file_name") }}' style="color:lightblue">{{ $book->book_file_name }}</a></td>
     
     
     <td >
     <button class="btn" type="button">
                                    <a  href="{{ route('book.show',$book->id) }}"><i class="icon-eye-open"></i></a> </button>
                  <button class="btn" type="button">
      <a  href="{{ route('book.edit',$book->id) }}"> <i class="icon-edit"></i></a></button>
              
                                    {!! Form::open(['method' => 'DELETE','route' => ['book.destroy', $book->id],'style'=>'display:inline']) !!}
                  
                  {{ Form::button('<i class="icon-trash"></i>', ['type' => 'submit', 'class' => 'btn'] )  }}
                  
                                    {!! Form::close() !!}
                                             
                            </td>
                          </tr>
               @endforeach
                        </tbody>
                           
                   
                                </table>
                            </div>
                        </div>

@endsection