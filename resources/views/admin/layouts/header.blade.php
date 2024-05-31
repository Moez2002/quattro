<div id="main_content">

    <!-- Small icon top menu -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img  src="{{asset('upload/actualités/quattro.png')}}" alt=""/></a>
                    <a href="{{asset('/new/home1')}}" class="nav-link icon"><i class="fa fa-home"></i></a>
                  
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa fa-navicon"></i></a>
                </div>            
            </div>
        </div>
    </div>

    <!-- Notification and  Activity-->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#notification" aria-expanded="true">Notification</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane   active" id="notification" aria-expanded="true">
                <ul class="list-unstyled feeds_widget">
                    <li>
                        <div class="feeds-left"><i class="fa fa-check"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-danger">Issue Fixed</h4>
                            <small>WE have fix all Design bug with Responsive</small>
                            <small class="text-muted">11:05</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">New User</h4>
                            <small>I feel great! Thanks team</small>
                            <small class="text-muted">10:45</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Feedback</h4>
                            <small>It will give a smart finishing to your site</small>
                            <small class="text-muted">Today</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                        <div class="feeds-body">
                            <h4 class="title text-warning">Server Warning</h4>
                            <small>Your connection is not private</small>
                            <small class="text-muted">10:50</small>
                        </div>
                    </li>
                    <li>
                        <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                        <div class="feeds-body">
                            <h4 class="title">7 New Orders</h4>
                            <small>You received a new oder from Tina.</small>
                            <small class="text-muted">11:35</small>
                        </div>
                    </li>                                   
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane  " id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="{{asset("/public/assets/images/xs/avatar1.jpg")}}" alt="Avatar"></li>
                                <li><img src="{{asset("/public/assets/images/xs/avatar2.jpg")}}" alt="Avatar"></li>
                                <li><img src="{{asset("/public/assets/images/xs/avatar3.jpg")}}" alt="Avatar"></li>
                                <li><img src="{{asset("/public/assets/images/xs/avatar4.jpg")}}" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- start User detail -->
    <div class="user_div">
        <h5 class="brand-name mb-4">User Crush<a href="javascript:void(0)" class="user_btn"><i class="icon-close"></i></a></h5>
        <div class="card">
            <img class="card-img-top" src="{{asset("/public/assets/images/gallery/6.jpg")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Daniel Kristeen</h5>
                <p class="card-text">795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                <div class="row">
                    <div class="col-4">
                        <h6><strong>3265</strong></h6>
                        <small>Post</small>
                    </div>
                    <div class="col-4">
                        <h6><strong>1358</strong></h6>
                        <small>Followers</small>
                    </div>
                    <div class="col-4">
                        <h6><strong>10K</strong></h6>
                        <small>Likes</small>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">michael@example.com</li>
                <li class="list-group-item">+ 202-555-2828</li>
                <li class="list-group-item">October 22th, 1990</li>
            </ul>
            <div class="card-body">
                <a href="javascript:void(0)" class="card-link">View More</a>
                <a href="javascript:void(0)" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="d-block">Storage <span class="float-right">77%</span></label>
            <div class="progress progress-sm">
                <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
            </div>
            <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
        </div>
    </div>

<div id="left-sidebar" class="sidebar">
        <div class="d-flex justify-content-between brand_name">
            <h5 class="brand-name">Quattro</h5>
            <div class="theme_btn">
                <a class="theme1" data-toggle="tooltip" title="Theme Radical" href="#" onclick="setStyleSheet('../public/assets/css/theme1.css', 0);"></a>
                <a class="theme2" data-toggle="tooltip" title="Theme Turmeric" href="#" onclick="setStyleSheet('../public/assets/css/theme2.css', 0);" ></a>
                <a class="theme3" data-toggle="tooltip" title="Theme Caribbean" href="#" onclick="setStyleSheet('../public/assets/css/theme3.css', 0);"></a>
                <a class="theme4" data-toggle="tooltip" title="Theme Cascade" href="#" onclick="setStyleSheet('../public/assets/css/theme4.css', 0);"></a>
            </div>
        </div>
        

        <div class="tab-content">
            <div class="tab-pane fade active show" id="all-tab">
                <nav class="sidebar-nav">
                    <ul class="metismenu ci-effect-1">
                        <li class="g_heading">Pages</li>
                        <li><a href="{{asset("/new/home1")}}"><i class="icon-home"></i><span data-hover="Home">Home</span></a></li>
                        <li><a href="{{asset("/new/coordonnees")}}"><i class="fe fe-file-text"></i><span data-hover="Coordonnées">Cordonnées</span></a></li>
                        <li><a href="{{asset("/new/aboutus1")}}"><i class="icon-users"></i><span data-hover="AboutUs">About Us</span></a></li>
                        <li><a href="{{asset("/new/contact1")}}"><i class="fe fe-phone"></i><span data-hover="Contact">Contact</span></a></li>

                    
                        <li><a href="{{asset("/tables/actualités")}}"><i class="fa fa-newspaper-o"></i><span data-hover="Actualités">Actualités</span></a></li>
                        
                        <li>
                            <a href="javascript:void(0)" class="has-arrow arrow-b"><i class="fe fe-user"></i><span data-hover="Rolepermission">Role permission</span></a>
                            <ul>
                                <li><a href="{{asset("/roles")}}"><i class=""></i><span data-hover="Roles">Roles</span></a></li>
                                <li><a href="{{asset("/permissions")}}"><i class=""></i><span data-hover="permissions">Permissions</span></a></li>
                            </ul>
                        </li>  
                        <li>
                            <a href="{{asset("/tables/categories")}}" ><i class="icon-grid"></i><span data-hover="Categories">Categories</span></a>                            
                        </li>

                        <li><a href="{{asset("/tables/produit")}}"><i class="fe fe-package"></i><span data-hover="Produit">Produit</span></a></li>
                        <li><a href="{{asset("/tables/catalogue")}}"><i class="fe fe-book-open"></i><span data-hover="Catalogue">Catalogue</span></a></li>

                        <li><a href="{{asset('/users')}}"><i class="fe fe-users"></i><span data-hover="Users">Users</span></a></li>              

                        
                       
                                      
                      
                        <li class="g_heading">Extra Pages</li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow arrow-b"><i class="icon-lock"></i><span data-hover="Authentication">Authentication</span></a>
                            <ul>
                                <li><a href="../auth/login"><span data-hover="Login">Login</span></a></li>
                                 
                            </ul>
                        </li>
        
                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="app-tab">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li class="g_heading">Components</li>
                        <li><a href="{{asset("/public/components/typography.html")}}"><i class="fe fe-type"></i><span>Typography</span></a></li>
                        <li><a href="{{asset("/public/components/colors.html")}}"><i class="fe fe-feather"></i><span>Colors</span></a></li>
                        <li><a href="{{asset("/public/components/alerts.html")}}"><i class="fe fe-alert-triangle"></i><span>Alerts</span></a></li>
                        <li><a href="{{asset("/public/components/avatars.html")}}"><i class="fe fe-user"></i><span>Avatars</span></a></li>
                        <li><a href="{{asset("/public/components/buttons.html")}}"><i class="fe fe-toggle-right"></i><span>Buttons</span></a></li>
                        <li><a href="{{asset("/public/components/breadcrumb.html")}}"><i class="fe fe-link-2"></i><span>Breadcrumb</span></a></li>
                        <li><a href="{{asset("/public/components/forms.html")}}"><i class="fe fe-layers"></i><span>Input group</span></a></li>
                        <li><a href="{{asset("/public/components/list-group.html")}}"><i class="fe fe-list"></i><span>List group</span></a></li>
                        <li><a href="{{asset("/public/components/modal.html")}}"><i class="fe fe-square"></i><span>Modal</span></a></li>
                        <li><a href="{{asset("/public/components/pagination.html")}}"><i class="fe fe-file-text"></i><span>Pagination</span></a></li>
                        <li><a href="{{asset("/public/components/cards.html")}}"><i class="fe fe-image"></i><span>Cards</span></a></li>
                        <li><a href="{{asset("/public/components/charts.html")}}"><i class="fe fe-pie-chart"></i><span>Charts</span></a></li>
                        <li><a href="{{asset("/public/components/form-components.html")}}"><i class="fe fe-check-square"></i><span>Form</span></a></li>
                        <li><a href="{{asset("/public/components/tags.html")}}"><i class="fe fe-tag"></i><span>Tags</span></a></li>                        
                        <li><a href="javascript:void(0)"><i class="fe fe-help-circle"></i><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0)"><i class="fe fe-life-buoy"></i><span>Changelog</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="setting-tab">
                <div class="mb-4 mt-3">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-opensans" checked="">
                            <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                    <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                    <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
