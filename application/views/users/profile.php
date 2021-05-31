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
                      <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
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
                                <h6><i class="fa fa-calendar"></i> BD</h6><span>16 August 1992</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                          <div class="user-designation">
                            <div class="title"><a target="_blank" href=""><?=$user['name'] ?></a></div>
                            <div class="desc mt-2">ME</div>
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
                          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>                          
                          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-github-square"></i></a></li>
                        </ul>
                      </div>
                      <div class="follow">
                        <div class="row">
                          <div class="col-6 text-md-right border-right">
                            <div class="follow-num counter">999</div><span>Follower</span>
                          </div>
                          <div class="col-6 text-md-left">
                            <div class="follow-num counter">999</div><span>Following</span>
                          </div>
                        </div>
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