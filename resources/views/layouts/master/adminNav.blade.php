

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
            <div class="dropdown-menu animated flipInY"> 
           
            </div> 
        <!-- End User profile text-->
       
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--/////Second Start--}}
                
                 <li @if(request()->is('pms/dashboard')) class="active" @endif><a id="notInclude" class="waves-effect waves-dark" href="{{url('pms/dashboard')}}" aria-expanded="false"><i class="fas fa-tachometer-alt"></i><span class="hide-menu">Dashboard </span></a>
                </li>
               

                <li @if(request()->is('hrms*')) class="active" @endif > <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Human Resource</span></a>
                    <ul aria-expanded="false" class="collapse">
                       
                        <li><a href="{{url('/testing')}}">User Detail</a></li>
                    @canany(['hr_edit_record','View Record'])
                        <li><a href="">Add Employee</a></li>
                        <li><a href="">List of Employees</a></li>
                        <li><a href="">Add Designation</a></li>
                    @endcanany
                      
                    </ul>
                </li>
               
                 
    
               
                {{--///////// Second End--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
     
</aside>