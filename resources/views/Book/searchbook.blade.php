@extends('layout.master')
@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
@endsection 
@section('content')



<br>
         {{-- Search Start Here --}}
      
 <nav class="navbar navbar-default">
        <div class="nav nav-justified navbar-nav">
     {!! Form::open(['method'=>'GET','url'=>'searchbook','class'=>'navbar-form navbar-search','role'=>'search']) !!}


 <div class="input-group">
                
                    <input type="text" class="form-control" name="search"  size="100" placeholder="Search by Book Name....">
                
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
                    <h3 class="panel-title">List of Books</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                       
                    <th><em class="fa fa-cog"></em>Action</th>
                     <th class="hidden-xs">No</th>
                    <th>The Book Category</th>
                    <th>The Book Name</th>
                    <th>Author</th>
                    <th>Copyright for the Book</th>
                    <th>No of Book</th>
                    <th>ISBN for the Book</th>
                    <th>Shelf No</th>
                    <th>Book</th>
                            </tr> 
                          </thead>

       @foreach ($books as $key => $book)
                  <tbody>
                          <tr>


                            <td width="20%">
                            <a class="btn btn-info btn-xs" href="{{ route('book.show',$book->id) }}">Show</a>
                              <a class="btn btn-primary btn-xs" href="{{ route('book.edit',$book->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['book.destroy', $book->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                             
                            </td>
        <td>{{ ++$i }}</td>
        <td>{{ $book->category }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->copyright }}</td>
        <td>{{ $book->book_no }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->shelf_no }}</td>
         <td><a href='{{ asset("uploads/$book->book_file_name") }}' style="color:lightblue">{{ $book->book_file_name }}</a></td>
                          </tr>
                        </tbody>
                            @endforeach
                </table>
            
              </div>
            </div>
@endsection