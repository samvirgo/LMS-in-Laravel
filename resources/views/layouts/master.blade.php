<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width ,  initial-scale=1">
	<title>@yield('title')</title>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	    <link  href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
        <link  href="{{asset ('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link  href="{{asset ('css/theme.css')}}" rel="stylesheet">
        <link  href="{{asset ('images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'>
        <script src="{{ asset('js/app.js') }}"></script>

	    <script src="{{asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/common.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>


	@yield('style')
</head>
 <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="index.html">KU LMS </a>
                    
                       
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                 <div class="span3">
                     <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                             <li class="active"><a href="{{('/admin/dashboard')}}"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                <li class="active"><a href="{{('/searchbook')}}"><i class="menu-icon icon-search"></i>Search Book
                                </a></li>
                                     <li><a href="{{('/book/create')}}"><i class="menu-icon icon-folder-open"></i>Add Books  </a></li>
                                    <li><a href="{{('/book')}}"><i class="menu-icon icon-list"></i>All Books in Library </a></li>
                                       </ul>
                            <!--/.widget-nav-->
                           <ul class="widget widget-menu unstyled">
                                <li><a href="{{('/search')}}"><i class="menu-icon icon-search"></i>Search Member </a>
                                </li>
                                <li><a href="{{('/student/create')}}"><i class="menu-icon icon-plus-sign"></i>Add Member</a></li>
                                <li><a href="{{('/student/student')}}"><i class="menu-icon icon-group"></i>All Registered Members</a></li>
                                       </ul>

                                        <ul class="widget widget-menu unstyled">
                                <li><a href="{{('/searchmonograph')}}"><i class="menu-icon icon-search"></i>Search Monograph </a>
                                </li>
                                <li><a href="{{('/monograph/create')}}"><i class="menu-icon icon-plus-sign"></i>Add Monograph</a></li>
                                <li><a href="{{('/monograph')}}"><i class="menu-icon icon-list"></i>All Monographs in Library </a></li>
                                       </ul>
                            
                            <ul class="widget widget-menu unstyled">
                                 <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-signout">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Issue / Return Books </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="{{('/issuebook')}}"><i class="menu-icon icon-repeat"></i>Issue book </a></li>
                                        <li><a href="{{('/returnbook')}}"><i class="menu-icon icon-undo"></i>Return Book </a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="{{('/issue/history')}}"><i class="menu-icon icon-table"></i>Issue Book History </a></li>
                               
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="menu-icon icon-signout"></i>Logout </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                     </li>
                            </ul>
                        </div>
                        <!--/.sidebar-->    
                        </div>
                         <div class="span9">
                    <div class="content">

                    
                        @yield('content') 
                        </div>
                        </div>    
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
      <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2017 KU Library Management System</b> All rights reserved.
            </div>
        </div>
    </body>

</html>