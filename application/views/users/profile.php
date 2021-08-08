<!-- content-here -->
         <div class="page-body">
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12 mt-5">
                  <div class="card hovercard text-center">
                    <div class="cardheader"></div>
                    <div class="user-image">
                      <div class="avatar"><img alt="" src="<?=base_url('assets/img/' . $user['image']) ?>"></div>
                      <div class="icon-wrapper"><a href="<?=base_url('settings/settings'); ?>"><i class="icofont icofont-pencil-alt-5"></i></a></div>
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-envelope"></i> Email</h6><span><?=$user['email'] ?></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-calendar"></i> BD</h6><span>none</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                          <div class="user-designation">
                            <div class="title"><a target="_blank" href=""><?=$user['name'] ?></a></div>
                            <div class="desc mt-2"><?=$user['role'] ?></div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-phone"></i> Contact Us</h6><span>+62851234567</span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-location-arrow"></i> Location</h6><span>TR VII</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="social-media">
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="https://whatsapp.com" target="_blank" ><i style="color:#4FCE5D" class="fa fa-whatsapp"></i></a></li>                          
                         
                          <li class="list-inline-item"><a href="https://telegram.com" target="_blank"><i style="color:#0088cc" class="fa fa-telegram"></i></a></li>
                          <li class="list-inline-item"><a href="https://youtube.com" target="_blank"><i style="color:#cd201f" class="fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- user profile first-style end--> 
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- end content -->