@extends('layouts.adminmaster')
@section('title')
Home
@stop


@section('content')
                  

                        <div class="module">
                            <div class="module-head">
                                <h3>Issue Book</h3>
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
                                            <label class="control-label" for="basicinput">Member Name</label>
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
                                            <label class="control-label" for="basicinput">Book Category</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">ISBN of Book</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Issue Date</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Return Date</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                            </div>
                                        </div>
                                        

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Issue</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                               

@stop
 