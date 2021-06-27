<!-- content-here -->
         <div class="page-body">
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                <div class="col-lg-4 mt-5">

                  <div class="flash-success" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

                  <?php if ($this->session->has_userdata('alert')) { ?>
                  <div class="alert alert-danger alert-dismissible" id="alertPassword">
                      <h5><i class="fa fa-ban"></i> <?= $this->session->flashdata('alert'); ?></h5>
                  </div>
                  <?php } ?>

                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">My Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                          <div class="col-auto"><img class="img-70 rounded-circle" alt="" src="<?=base_url('assets/img/'). $user['image'];?>"></div>
                          <div class="col">
                            <h3 class="mb-1" style="text-transform: capitalize;"><?=$user['name'] ?></h3>
                            
                          </div>
                        </div>
                        
                      <form class="theme-form" method="post" action="<?=base_url('settings/updatePassword') ?>">
                        <div class="form-group">
                          <label class="form-label" for="password">Password</label>
                          <input class="form-control" type="password" name="password" id="password" placeholder="********">
                          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                          <label class="form-label" for="new_password">New Password</label>
                          <input class="form-control" type="password" name="new_password" id="new_password" placeholder="********">
                          <?= form_error('new_password', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                          <label class="form-label" for="new_password_conf">Password confirmation</label>
                          <input class="form-control" type="password" placeholder="********" name="new_password_conf" id="new_password_conf">
                          <?= form_error('new_password_conf', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-footer">
                          <button type="submit" class="btn btn-primary btn-block btn-pill">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 mt-5">                  
                    <div class="card-header">
                      <h4 class="card-title mb-0">Edit Profile</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fa fa-x"></i></a></div>
                    </div>
                    <form action="<?= base_url('settings/updateImg'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" type="text" placeholder="Nama" name="name" id="name" value="<?=$user['name'] ?>" style="text-transform: capitalize;">
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="text" placeholder="Nama" name="email" id="email" value="<?=$user['email'] ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="form-group">
                            <label class="form-label" for="nik">NIK</label>
                            <input class="form-control" type="number" placeholder="N I K" name="nik" id="nik" readonly value="<?= $user['nik'] ?>">
                          </div>
                        </div>                       
                        <div class="form-group">
                          <div class="col-sm-3">Foto</div>
                          <div class="col-sm-11">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <img style="margin-bottom:10px"
                                          src="<?= base_url('assets/img/') . $user['image']; ?>"
                                          class="img-thumbnail">

                                      <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12 text-right">
                          <button class="btn btn-primary btn-pill" type="submit">Update Profile</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- end content -->


