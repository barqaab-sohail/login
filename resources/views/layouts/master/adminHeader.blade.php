<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background-color:#00FF7F">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <!-- Logo icon --><b>
                   
                    <img src="{{asset('Massets/images/bqb-black-logo-1.png') }}" alt="HRMS" class="light-logo" style="height:55px" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                    <h3 class="light-logo"> <img src="{{asset('Massets/images/bqb-white-logo-3.png')}}"/></h3>
                </span> 
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items Left Site-->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                </li>
              
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and Notification Right Side -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
              
                <!-- Notification -->
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark"  href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell" ></i>
                    </a>
                     <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li><a href=""  class="link" data-toggle="tooltip" title="Notification List"><i class="fa fa-tv"></i> View Notifications</a></li>
                            <li><a href=""  class="link" data-toggle="tooltip" title="Create Notification"><i class="fa fa-bell"></i> Create Notification</a></li>
                            <li><a href=""  class="link" data-toggle="tooltip" title="Send Notification to HR"><i class="fas fa-arrow-right"></i> Send Message to HR</a></li>                     
                        </ul>                     
                    </div>                 
                </li>

                <!-- Employee Picture -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                    
                    {{ucwords (Auth::User()->HrEmployee->first_name??'')}} {{ucwords(Auth::User()->HrEmployee->last_name??'')}} 
                    <img src="{{hrmsAsset().auth()->user()->picturePath()}}" onerror="this.src ='{{asset('Massets/images/default.png')}}';" alt="user" class="profile-pic" height="40" width="50%"/></a>
                    
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li><a id="logout" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="link" data-toggle="tooltip" title=""><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    
                        <!-- If URL Manualy then redirect to login -->
                       <!--  @if(!isset($_SERVER['HTTP_REFERER']))
                        {
                            <script>window.location.href = "{{route('login')}}";</script>
                        }
                        @endif -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
</header>