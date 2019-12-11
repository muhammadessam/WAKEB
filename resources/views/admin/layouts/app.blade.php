<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    @php $locale = session()->get('locale'); @endphp
    @switch($locale)
        @case('en')
        <link rel="stylesheet" href="{{asset('css/AdminLTE.min_EN.css')}}">
        @break
        @case('ar')
        <link rel="stylesheet" href="{{asset('css/AdminLTE.min_AR.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rtl.css')}}">
        @break
        @default
        <link rel="stylesheet" href="{{asset('css/AdminLTE.min_EN.css')}}">
@endswitch
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/fonts-fa.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>{{trans('users.controlPanel')}}</strong></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="messages-menu">
                        @switch($locale)
                            @case('en')
                            <a href="{{route('changeLang', 'ar')}}" class="change_lang bring_left">Ar</a>
                            @break
                            @case('ar')
                            <a href="{{route('changeLang', 'en')}}" class="change_lang bring_left">En</a>
                            @break
                            @default
                            <a href="{{route('changeLang', 'ar')}}" class="change_lang bring_left">Ar</a>
                        @endswitch
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <!-- Tasks: style can be found in dropdown.less -->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    {{auth()->user()->email}}
                                    <small>Member since {{auth()->user()->created_at->format('M Y')}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-left">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button href="#" class="btn btn-default btn-flat">Sign out</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{auth()->user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="جستوجو ...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

                <li class="{{request()->is('admin/users*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('users.users')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/users' ? "active":''}}"><a
                                href="{{route('showAllUsers')}}">{{trans('users.showAll')}}</a></li>
                        <li class="{{Request::path()=='admin/users/add' ? "active":''}}"><a
                                href="{{route('createView')}}">{{trans('users.addUser')}}</a></li>
                        <li class="{{Request::path()=='admin/users/deleted' ? "active":''}}"><a
                                href="{{route('getDeletedUsers')}}">{{trans('users.deletedUsers')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/products*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('products.products')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/products' ? "active":''}}"><a
                                href="{{route('showAllProducts')}}">{{trans('products.productsShowAll')}}</a></li>
                        <li class="{{Request::path()=='admin/products/add' ? "active":''}}"><a
                                href="{{route('productCreateView')}}">{{trans('products.productsAdd')}}</a></li>
                        <li class="{{Request::path()=='admin/products/deleted' ? "active":''}}"><a
                                href="{{route('getDeletedProducts')}}">{{trans('products.productsRemoved')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/services*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('services.services')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/services' ? "active":''}}"><a
                                href="{{route('showAllServices')}}">{{trans('services.servicesShowAll')}}</a></li>
                        <li class="{{Request::path()=='admin/services/add' ? "active":''}}"><a
                                href="{{route('serviceCreateView')}}">{{trans('services.servicesAdd')}}</a></li>
                        <li class="{{Request::path()=='admin/services/deleted' ? "active":''}}"><a
                                href="{{route('getDeletedServices')}}">{{trans('services.servicesRemoved')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/features*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('features.features')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/features' ? "active":''}}"><a
                                href="{{route('showAllFeatures')}}">{{trans('features.all')}}</a></li>
                        <li class="{{Request::path()=='admin/features/add' ? "active":''}}"><a
                                href="{{route('showFeatureCreateView')}}">{{trans('features.Add')}}</a></li>
                        <li class="{{Request::path()=='admin/features/deleted' ? "active":''}}"><a
                                href="{{route('showDeletedFeatures')}}">{{trans('features.deleted')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/solutions*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('solutions.solutions')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/solutions' ? "active":''}}"><a
                                href="{{route('showAllSolutions')}}">{{trans('solutions.showAll')}}</a></li>
                        <li class="{{Request::path()=='admin/solutions/add' ? "active":''}}"><a
                                href="{{route('solutionCreateView')}}">{{trans('solutions.add')}}</a></li>
                        <li class="{{Request::path()=='admin/solutions/deleted' ? "active":''}}"><a
                                href="{{route('solutionDeleted')}}">{{trans('solutions.deleted')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/usecases*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('usecases.usecase')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/usecases' ? "active":''}}"><a
                                href="{{route('useCasesShowAll')}}">{{trans('usecases.showAll')}}</a></li>
                        <li class="{{Request::path()=='admin/usecases/add' ? "active":''}}"><a
                                href="{{route('usecasesCreateView')}}">{{trans('usecases.add')}}</a></li>
                        <li class="{{Request::path()=='admin/usecases/deleted' ? "active":''}}"><a
                                href="{{route('usecasesshowDeleted')}}">{{trans('usecases.deleted')}}</a></li>
                    </ul>
                </li>

                <li class="{{request()->is('admin/sliders*') ? "active":''}} treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>{{trans('slider.sliders')}}</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{Request::path()=='admin/sliders' ? "active":''}}"><a
                                href="{{route('sliderShowAll')}}">{{trans('Show All')}}</a></li>
                        <li class="{{Request::path()=='admin/sliders/add' ? "active":''}}"><a
                                href="{{route('sliderCreateView')}}">{{trans('Add')}}</a></li>
                        <li class="{{Request::path()=='admin/sliders/deleted' ? "active":''}}"><a
                                href="{{route('sliderShowDeleted')}}">{{trans('Removed')}}</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <section class="content">
            @yield('content')
        </section>

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section><!-- right col -->
    </div><!-- /.row (main row) -->

    <!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-user bg-yellow"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-left">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-left">95%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-left">50%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript::;">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-left">68%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>
                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-left" checked>
                    </label>
                    <p>
                        Some information about this general settings option
                    </p>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-left" checked>
                    </label>
                    <p>
                        Other sets of options are available
                    </p>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-left" checked>
                    </label>
                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div><!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-left" checked>
                    </label>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-left">
                    </label>
                </div><!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript::;" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div><!-- /.form-group -->
            </form>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.4 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>
@yield('scripts')
</body>
</html>
