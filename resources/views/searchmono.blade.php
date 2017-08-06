@extends('layouts.master')
@section('title')
Home
@stop


@section('content')
                   
 {{-- Search Start Here --}}
                        <div class="module">
                            <div class="module-head">
                                <h3>Search Monograph</h3>
                            </div>
                            <div class="module-body">
 {!! Form::open(['method'=>'GET','url'=>'/searchresult','class'=>'form-horizontal row-fluid','role'=>'search']) !!}
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Monograph Name</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8"  name="search" placeholder="Search By Student Name">
                                                <button class="btn-info" type="submit">
                            <i class="icon-search"></i>
                        </button>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                   
    {!! Form::close() !!}
    {{-- Search End Here --}}

@stop