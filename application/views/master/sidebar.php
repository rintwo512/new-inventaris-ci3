
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
                  <li class="mt-2"><a href="<?=base_url('home');?>">Home</a></li>
                </ul>
              </li>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-users"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('users');?>">User list</a></li>                  
                </ul>
              </li> 
              <?php endif;?>
              <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-portfolio"></i></a>
                <ul class="iconbar-mainmenu custom-scrollbar">                  
                  <li><a href="<?=base_url('airco');?>">Air Conditioner</a></li>
                  <li><a href="#">Apart</a></li>
                </ul>
              </li>                          
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->   