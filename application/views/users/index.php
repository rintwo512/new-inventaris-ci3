 <?php 

  require 'vendor/autoload.php';
  use Carbon\Carbon;

 ?>

 <!-- content-here -->
 <div class="flash-success" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
         <div class="page-body">         
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">                      
              <!-- Row Borders styles-->
              <div class="col-sm-12 mt-5">
                <div class="card">
                  <div class="card-header">
                    <h5>Data user</h5>
                  </div>
                  <div class="card-body">
                    <a href="<?=base_url('users/register');?>" class="btn btn-primary btn-sm mb-4 pull-right rounded-pill"><i class="fa fa-plus"></i> Add User</a>
                    <div class="table-responsive">
                      <table class="row-border" id="example-style-7">
                        <thead class="myColor">
                          <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>Akses</th>                            
                            <th>Tgl bergabung</th>           
                            <th>Status</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($allUsers as $usr) :?>
                            <?php if($usr->role != "super admin") : ?>
                          <tr>
                            <td><img src="<?=base_url('assets/img/' . $usr->image);?>" class="img-fluid img-thumbnail" width="60"></td>
                            <td style="text-transform: capitalize;"><?=$usr->name;?></td>
                            <td><?=$usr->email;?></td>
                            <td><?=$usr->nik;?></td>
                            <td><?=$usr->role;?></td>
                            <td><?= date('Y/M/d',$usr->created_at) ?></td>
                            <?php if($usr->is_active < 1 ) : ?>
                            <td><span class="badge badge-danger">Non-active</span></td>
                            <?php else : ?>
                            <td><span class="badge badge-info">Active</span></td>
                            <?php endif; ?>
                            <td>
                            <?php if($usr->role != "admin") : ?>                            
                              <a href="javascript:;" id="userUpdate" data-toggle="modal" data-target="#modalUserUpdate" class="btn btn-info btn-xs" data-id="<?=$usr->id;?>" data-role="<?=$usr->role;?>" data-active="<?=$usr->is_active;?>"><i class="fa fa-pencil"></i></a>

                            <?php elseif($user['role'] == "super admin") : ?>

                              <a href="javascript:;" id="userUpdate" data-toggle="modal" data-target="#modalUserUpdate" class="btn btn-info btn-xs" data-id="<?=$usr->id;?>" data-role="<?=$usr->role;?>" data-active="<?=$usr->is_active;?>"><i class="fa fa-pencil"></i></a>

                            <?php endif; ?>                              
                            
                            
                             <?php if($user['role'] == "super admin") : ?>

                              <a id="delUsers" href="<?=base_url('users/destroy/' . $usr->id);?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

                            <?php endif; ?>
                            
                            </td>
                          </tr>
                            <?php endif; ?>
                          <?php endforeach; ?>                       
                        </tbody>                       
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row Borders Ends-->                          
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- end content -->


        <!-- modal update -->
          <div class="modal fade" id="modalUserUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update user</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" id="formUpdateUser">
                    <form action="<?=base_url('users/update');?>" method="post" class="needs-validation" novalidate="">
                      <input type="hidden" name="id" id="id">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="is_active" class="mb-0">Status</label>
                          <select class="form-control" name="is_active" id="is_active" type="text" required="">
                            <option value="1">Active</option>
                            <option value="0">Non-active</option>             
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="is_role" class="mb-0">Role</label>
                          <select class="form-control" name="is_role" id="is_role" type="text" required="">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>             
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        </div>             
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
<!-- end modal update -->
<script src="<?=base_url('assets');?>/js/form-validation-custom.js"></script>