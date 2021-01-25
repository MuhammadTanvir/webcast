<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="{{route('admin.index')}}"><img src="{{asset('admin-assets/images/icon/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="{{ Route::is('admin.index') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('admin.index')}}">dashboard</a></li>
                                    
                                </ul>
                            </li>


                             <li class="{{ Route::is('admin.series.index' ? 'active' : '')}}">
                            
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-video"></i> <span>Series Management</span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('admin.series.index')}}">Series List</a></li>
                                    <li><a href="{{route('admin.series.create')}}"> New Series</a></li>
                                    
                                </ul>
                            </li>
                            
                            
                            
                           {{--  <li class="{{ Route::is('admin.users') || Route::is('admin.users.create') ? 'active' : '' }}">
                            
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i> <span>Users Management</span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('admin.users')}}">Users List</a></li>
                                    <li><a href="{{route('admin.users.create')}}"> New User</a></li>
                                    
                                </ul>
                            </li> --}}
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>