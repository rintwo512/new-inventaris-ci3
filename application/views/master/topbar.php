<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>Loading...</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="index.html"><img src="<?=base_url('assets');?>/img/logo-dc.png" alt=""></a></div>
          </div>
          <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
              <label class="switch ml-3"><i class="font-info" id="sidebar-toggle" data-feather="align-center"></i></label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar">               </i></div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li>
                <form class="form-inline search-form" action="#" method="get">
                  <div class="form-group">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative">
                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search...">
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                      </div>
                      <div class="Typeahead-menu"></div>
                    </div>
                  </div>
                </form>
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>                          
              <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="<?=base_url('assets');?>/img/notification.png" alt="">
                <ul class="onhover-show-div notification-dropdown">
                  <li class="g-info">
                    <h5 class="f-w-700">Notifications</h5><span>You have 3 unread messages</span>
                  </li>
                  <li>
                    <div class="media">
                      <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                      <div class="media-body">
                        <h6>Your Posts</h6>
                        <p class="mb-0"> 1 Day Ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="pt-0">
                    <div class="media">
                      <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i></div>
                      <div class="media-body">
                        <h6>1 New Comments</h6>
                        <p class="mb-0"> 1 Day Ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
                </ul>
              </li>              
              <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="<?=base_url('assets/img/'). $user['image'];?>" alt=""></span>
                <ul class="onhover-show-div profile-dropdown">
                  <li class="g-info">
                    <h5 class="f-w-600 mb-0"><?=$user['name'];?></h5><span><?=$user['role'];?></span>
                  </li>
                  <li><a href="<?=base_url('auth/logout');?>" class="text-info"><i class="fa fa-user mr-2"></i>Profile</a></li>                  
                  <li><a href="<?=base_url('auth/logout');?>" class="text-info"><i class="fa fa-sign-out mr-2"></i>Log Out</a></li>                  
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>                 
        </div>
      </div>
      <!-- Page Header Ends-->