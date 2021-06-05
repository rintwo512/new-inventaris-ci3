
      <style>
        .log-out .bar-icons .btn-log{
          background: none;
          border:none;
        }
        .log-out .bar-icons .btn-log:focus{
          outline:none;
        }
      </style>

      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="iconsidebar-menu">
          <div class="sidebar">
            <ul class="iconMenu-bar custom-scrollbar">
              <?php if($user['role'] == 'admin') :?>
              <li><a class="bar-icons" href="javascript:void(0)">
                  <i class="pe-7s-home"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li class="mt-2"><a href="<?=base_url('home');?>">Dashboard</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-users"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('users');?>">Users</a></li>                  
                </ul>
              </li> 
              <?php endif;?>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-portfolio"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">          
                  <li><a href="<?=base_url('airco');?>">Data Ac</a></li>
                  <li><a href="<?=base_url('apart');?>">Data Apart</a></li>
                  <li><a href="<?=base_url('stock');?>">Data Aset ME</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-user"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('settings/userProfile');?>">My profile</a></li>
                </ul>
              </li>  
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-settings"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('settings/settings');?>">Settings</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-pendrive"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('master');?>">Master data</a></li>
                </ul>
              </li>
              <li>                
                  <a id="logout" class="bar-icons" href="<?=base_url('auth/logout');?>"><i class="pe-7s-power"></i></a>                
              </li>                           
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->   