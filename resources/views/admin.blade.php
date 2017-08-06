@extends('/layouts.master')
@section('title')
Home
@stop


@section('content')

                  
                  <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span12">
                                        <h3>
                                            Welcome to kabul University Library Management System</h3>
                                    </a>
                                    <a href="#" class="btn-box big span4"><i class="icon-group"></i><b><?php $data; ?>
{{$data = DB::table("students")->count('id')}}</b>
                                        <p class="text-muted">
                                            Total student</p>
                                    </a><a href="#" class="btn-box big span4"><i class="menu-icon icon-book"></i><b><?php $data; ?>
{{$data = DB::table("books")->count('id')}}</b>
                                        <p class="text-muted">
                                            Total Book</p>
                                    </a>
                                </div>
                                <!--/.span9-->
                               
                             

@stop
 

