@extends('layouts.adminmaster')
@section('title')
Home
@stop


@section('content')
                  

                        <div class="module">
                            <div class="module-head">
                                <h3>Return Book</h3>
                            </div>
                            <div class="module-body">

                                    <form class="form-horizontal row-fluid">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Member ID</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Book Title</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>

                                       
                                      
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Return</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                               

@stop
 