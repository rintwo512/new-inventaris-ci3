 <style>
table.details tr:hover {
    background-color: rgba(100, 100, 100, 0.2);
}

.colorTable th,
.colorTable td {
    color: #007bff !important;
}
</style>
 <!-- content-here -->
 <div class="flash-success" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
 <div class="flash-err" data-eros="<?= $this->session->flashdata('message_err'); ?>"></div>
         <div class="page-body">         
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">                      
              <!-- Row Borders styles-->
              <div class="col-sm-12 mt-5">
                <div class="card">
                  <div class="card-header">
                    <h5>Data apar</h5>
                  </div>
                  <div class="card-body">
                    <?php if ($user['role'] == "admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalApartAdd"><i class="fa fa-plus"></i> Add Data</button>

                   <?php endif; ?>
                    <div class="table-responsive">
                      <table class="row-border" id="example-style-7">
                        <thead class="myColor">
                          <tr>                            
                            <th>No.Apart</th>
                            <th>Wing</th>
                            <th>Lantai</th>
                            <th>Lokasi</th>
                            <th>Merk</th>                            
                            <th>Jenis</th>
                            <th>Berat</th>                            
                            <th>Status</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data_apart as $apart) : ?>
                          <tr>
                            <td><?=$apart['no_apart'] ?></td>
                            <td><?=$apart['wing'] ?></td>
                            <td><?=$apart['lantai'] ?></td>
                            <td><?=$apart['lokasi'] ?></td>
                            <td><?=$apart['merk'] ?></td>
                            <td><?=$apart['jenis'] ?></td>   
                            <td><?=$apart['berat'] ?></td>
                            <?php if($apart['status'] == "Normal") : ?>
                            <td>
                              <span class="badge badge-success"><?=$apart['status'] ?>
                              </span>
                            </td>
                            <?php else : ?>
                            <td>
                              <span class="badge badge-danger"><?=$apart['status'] ?>
                              </span>
                            </td>
                            <?php endif; ?>
                            <td>
                              <a  href="javascript:;" id="updateApart" data-toggle="modal" data-target="#modalUpdateApart" class="btn btn-info btn-xs" 
                              data-id="<?=$apart['id'] ?>"
                              data-no_apart="<?=$apart['no_apart'] ?>"
                              data-wing="<?=$apart['wing'] ?>"
                              data-lantai="<?=$apart['lantai'] ?>"
                              data-lokasi="<?=$apart['lokasi'] ?>"
                              data-merk="<?=$apart['merk'] ?>"
                              data-jenis="<?=$apart['jenis'] ?>"
                              data-berat="<?=$apart['berat'] ?>"
                              data-status="<?=$apart['status'] ?>"
                              data-expired="<?=$apart['tgl_expired'] ?>"
                              data-pengadaan="<?=$apart['tgl_pengadaan']?>"
                              data-catatan="<?=$apart['catatan'] ?>"><i class="fa fa-pencil"></i>
                              </a>

                              <a id="detailApart" class="btn btn-warning btn-xs"
                               data-toggle="modal" 
                               data-target="#modalApartDetail"
                               data-expired="<?=$apart['tgl_expired']?>"
                               data-pengadaan="<?=$apart['tgl_pengadaan']?>" 
                               data-catatan="<?=$apart['catatan']?>"
                               data-updated_by="<?=$apart['updated_by']?>"
                               data-created_by="<?=$apart['created_by']?>"><i class="fa fa-info text-white"></i>
                             </a>
                             <?php if ($user['role'] == "admin") : ?>
                              <a id="deleteDataApart" href="<?=base_url('apart/destroy/') . $apart['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                              <?php endif; ?>
                            </td>                            
                          </tr>
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


<!-- modal-add -->
<div class="modal fade bd-example-modal-lg" id="modalApartAdd" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form add data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="modalStore">
                <form action="<?= base_url('apart/store'); ?>" method="post" class="needs-validation" novalidate="">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                            <label for="wing" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" id="wing" name="wing" type="text" placeholder="Please fill in" required>
                              <option value="">--Select--</option>
                              <option value="W-A">W-A</option>
                              <option value="W-B">W-B</option>
                              <option value="W-C">W-C</option>
                              <option value="W-D">W-D</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="no_apart" class="mb-0">No Apart <em class="text-danger">*</em></label>
                            <input class="form-control" id="no_apart" name="no_apart" type="number"
                                placeholder="Please fill in" required>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div id="flor"></div>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lokasi" class="mb-0">Lokasi <em class="text-danger">*</em></label>
                            <input class="form-control" name="lokasi" id="lokasi" type="text" placeholder="Please fill in" required="">
                            <div class="invalid-feedback">The field is required</div>
                        </div>                        
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="merk" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <select class="form-control" name="merk" id="merk" type="text" required autocomplete="off">
                              <option value="">--Select--</option>
                              <option value="Chubb">Chubb</option>
                              <option value="Ghunnebo">Ghunnebo</option>
                              <option value="Starvvo">Starvvo</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="jenis" class="mb-0">Jenis <em class="text-danger">*</em></label>
                            <select class="form-control" name="jenis" id="jenis" type="text" required autocomplete="off">
                                  <option value="">--Select--</option>
                                  <option value="Powder">Powder</option>
                                  <option value="Foam">Foam</option>
                                  <option value="Co2">Co2</option>
                                  <option value="Lainnya">Lainnya</option>
                                </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tgl_expired" class="mb-0">Tanggal Expired</label>
                            <input class="form-control" name="tgl_expired" id="tgl_expired" type="date" required>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="tgl_pengadaan" class="mb-0">Tanggal pengadaan</label>
                            <input class="form-control" name="tgl_pengadaan" id="tgl_pengadaan" type="date" required>
                            <div class="invalid-feedback">The field is required</div>
                        </div>   
                        <div class="col-md-4 mb-3">
                            <label for="berat" class="mb-0">Berat <em class="text-danger">*</em></label>
                            <input class="form-control" name="berat" id="berat" type="text" required autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="status" class="mb-0">Status <em class="text-danger">*</em></label>
                            <select class="form-control" name="status" id="status" type="text" required>
                                  <option value="">--Select--</option>
                                  <option value="Normal">Normal</option>
                                  <option value="Rusak">Rusak</option>
                                </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>                                           
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnTambah">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal-add -->


<!-- modal details -->
<div class="modal fade bd-example-modal-lg" id="modalApartDetail" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>         
            <div id="modal-apart">
                <table class="table details colorTable">
                    <tr>
                        <th>Tanggal expired</th>
                        <td id="tanggal_expired"></td>
                    </tr>
                    <tr>
                        <th>Tanggal pengadaan</th>
                        <td id="tanggal_pengadaan"></td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td id="catatan"></td>
                    </tr>                    
                    <tr>
                        <th>Tanggal update</th>
                        <td id="updated_by"></td>
                    </tr>
                    <tr>
                        <th style="font-weight: 900">Ditambah</th>
                        <td id="created_by" style="font-weight: 900"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end modal details -->



<!-- modal-update -->
<div class="modal fade bd-example-modal-lg" id="modalUpdateApart" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form update data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="update-modal-body">
                <form action="<?= base_url('apart/update'); ?>" method="post" class="needs-validation" novalidate="">
                  <div class="form-row">
                  <div class="col-md-12 mb-3">
                            <label for="wing" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" id="wing" name="wing" type="text" placeholder="Please fill in" required>
                              <option value="">--Select--</option>
                              <option value="W-A">W-A</option>
                              <option value="W-B">W-B</option>
                              <option value="W-C">W-C</option>
                              <option value="W-D">W-D</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="no_apart" class="mb-0">No.apart</label>
                            <input type="hidden" name="id" id="id">
                            <input class="form-control" id="no_apart" name="no_apart" type="text" placeholder="Please fill in" required="" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lantai" class="mb-0">Lantai</label>
                            <select class="form-control" id="lantai" name="lantai" type="text" placeholder="Please fill in"
                                required="">
                                  <option value="">--Select--</option>
                                  <option value="Lt1">Lt1</option>
                                  <option value="Lt2">Lt2</option>
                                  <option value="Lt3">Lt3</option>
                                  <option value="Lainnnya">Lainnya</option>
                                </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lokasi" class="mb-0">Lokasi</label>
                            <input class="form-control" name="lokasi" id="lokasi" type="text">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="merk" class="mb-0">Merk</label>
                            <select class="form-control" name="merk" id="merk" type="text" placeholder="Please fill in"
                                required autocomplete="off">
                                  <option value="">--Select--</option>
                                  <option value="Chubb">Chubb</option>
                                  <option value="Ghunnebo">Ghunnebo</option>
                                  <option value="Starvvo">Starvvo</option>
                                  <option value="Lainnya">Lainnya</option>
                                </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="jenis" class="mb-0">Jenis</label>
                            <select class="form-control" name="jenis" id="jenis" type="text" placeholder="Please fill in"
                                autocomplete="off">
                                  <option value="">--Select--</option>
                                  <option value="Powder">Powder</option>
                                  <option value="Foam">Foam</option>
                                  <option value="Co2">Co2</option>
                                  <option value="Lainnya">Lainnya</option>
                              </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tgl_expired" class="mb-0">Tanggal expired</label>
                            <input class="form-control" name="tgl_expired" id="tgl_expired" type="date">     
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                            <label for="tgl_pengadaan" class="mb-0">Tanggal pengadaan</label>
                            <input class="form-control" name="tgl_pengadaan" id="tgl_pengadaan" type="date">     
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="berat" class="mb-0">Berat</label>
                            <input class="form-control" name="berat" id="berat" type="text">     
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="status" class="mb-0">Status</label>
                            <select class="form-control" name="status" id="status" type="text" required>
                                  <option value="">--Select--</option>
                                  <option value="Normal">Normal</option>
                                  <option value="Rusak">Rusak</option>
                                </select>    
                            <div class="invalid-feedback">The field is required</div>
                        </div>                        
                    </div>
                    <div class="form-group col-md-12">
                            <label for="catatan_update">Catatan</label>
                            <textarea class="form-control" name="catatan_update" id="catatan_update" rows="3"></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary" id="btnTambah">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end-modal-update -->
<script src="<?=base_url('assets');?>/js/form-validation-custom.js"></script>