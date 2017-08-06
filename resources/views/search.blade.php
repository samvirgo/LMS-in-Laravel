@extends('layouts.master')
@section('title')
Home
@stop


@section('content')
                   

                        <div class="module">
                            <div class="module-head">
                                <h3>Search Member</h3>
                            </div>
                            <div class="module-body">

                                    <form class="form-horizontal row-fluid">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Enter Member ID</label>
                                            <div class="controls">
                                                <input type="text" id="basicinput"  class="span8">
                                                <button class="btn-info" type="button">
                            <i class="icon-search"></i>
                        </button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                               

@stop
 