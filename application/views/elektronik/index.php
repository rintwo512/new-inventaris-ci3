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
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Perangkat Elektronik</h5>                       
                    </div>
                    <div class="card-body">
                        <?php if ($user['role'] == "admin" || $user['role'] == "super admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalTambahElektronik"><i class="fa fa-plus"></i>    Tambah data</button>

                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr>
                                        <th>Aset</th>
                                        <th>Nama</th>
                                        <th>Merk</th>
                                        <th>Wing</th>
                                        <th>Lantai</th>       
                                        <th>Lokasi</th>
                                        <th style="text-align:center">Opsi</th>       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($elektronik as $el) : ?>                            
                                    <tr style="text-transform: capitalize;">
                                        <td style="text-transform: uppercase;"><?= $el['aset']; ?></td>
                                        <td><?= $el['nama']; ?></td>
                                        <td><?= $el['merk']; ?></td>
                                        <td><?= $el['wing']; ?></td>
                                        <td><?= $el['lantai']; ?></td>
                                        <td><?= $el['lokasi']; ?></td>
                                        <td align="center">

                                            <a id="btnUpdateEl" href="javascript:;" data-toggle="modal" data-target="#modalUpdateElektronik" class="btn btn-success btn-xs" 
                                            data-id_el1="<?=$el['id'] ?>"
                                            data-aset_el1="<?=$el['aset'] ?>"
                                            data-nama_el1="<?= $el['nama'] ?>"
                                            data-merk_el1="<?=$el['merk'] ?>"
                                            data-wing_el1="<?=$el['wing'] ?>"
                                            data-lantai_el1="<?=$el['lantai'] ?>"
                                            data-lokasi_el1="<?=$el['lokasi'] ?>"
                                            data-tegangan_el1="<?=$el['tegangan'] ?>"
                                            data-watt_el1="<?=$el['watt'] ?>"
                                            data-catatan_el1="<?=$el['catatan'] ?>"><i class="fa fa-pencil"></i></a>

                                            <a id="btnDetailEl" href="javascript:;" data-toggle="modal" data-target="#modalDetailEl" class="btn btn-warning btn-xs"
                                            data-tegangan_el2="<?=$el['tegangan'] ?>"
                                            data-watt_el2="<?=$el['watt'] ?>"
                                            data-catatan_el2="<?=$el['catatan'] ?>"
                                            data-created_el2="<?=$el['created_by'] ?>"
                                            data-updated_el2="<?=$el['updated_by'] ?>"><i class="fa fa-info"></i></a>
                                            <?php if($user['role'] == 'admin' || $user['role'] == 'super admin') : ?>
                                            <a id="btnDeleteEl" href="<?= base_url('elektronik/destroy/') . $el['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
            <!-- end myTable -->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<!-- end content -->

<!-- modal-add -->
<div class="modal fade bd-example-modal-lg" id="modalTambahElektronik" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form tambah data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('elektronik/store') ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="aset_el" class="mb-0">Aset</label>
                            <input class="form-control" id="aset_el" name="aset_el" type="text" placeholder="Please fill in" autocomplete="off" onkeyup="this.value=this.value.toUpperCase()">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="name_el" class="mb-0">Nama <em class="text-danger">*</em></label>
                            <input class="form-control" id="nama_el" name="nama_el" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="wing_el" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" name="wing_el" id="wing_el" type="text" required>
                                <option value="">--Select--</option>
                                <option value="W-A">W-A</option>
                                <option value="W-B">W-B</option>
                                <option value="W-C">W-C</option>
                                <option value="W-D">W-D</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div id="lt_el"></div>
                            <!-- <label for="lantai_el" class="mb-0">Lantai <em class="text-danger">*</em></label>
                            <select class="form-control" name="lantai_el" id="lantai_el" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Lt1">Lt1</option>
                                <option value="Lt2">Lt2</option>
                                <option value="Lt3">Lt3</option>
                            </select> -->
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="merk_el" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <input class="form-control" id="merk_el" name="merk_el" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lokasi_el" class="mb-0">Lokasi <em class="text-danger">*</em></label>
                            <input class="form-control" id="lokasi_el" name="lokasi_el" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="tegangan_el" class="mb-0">Tegangan</label>
                            <select class="form-control" id="tegangan_el" name="tegangan_el" type="text" autocomplete="off">
                                <option value="">--Select--</option>
                                <option value="220 Volt">220 Volt</option>
                                <option value="380 Volt">380 Volt</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="amper_el" class="mb-0">Amper/Watt</label>
                            <input class="form-control" name="amper_el" id="amper_el" type="text" placeholder="Please fill in">
                            <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                            <label for="catatan_el" class="mb-0">Catatan</label>
                            <textarea class="form-control" name="catatan_el" id="catatan_el" type="text" placeholder="Please fill in"></textarea>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>                     
                    <button type="submit" class="btn btn-primary" id="btnTambah">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal-add -->



<!-- modal-update -->
<div class="modal fade bd-example-modal-lg" id="modalUpdateElektronik" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form update data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="modal-body-el">
                <form action="<?=base_url('elektronik/update') ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <input type="hidden" name="id_el3" id="id_el3">
                            <label for="aset_el3" class="mb-0">Aset</label>
                            <input class="form-control" id="aset_el3" name="aset_el3" type="text" placeholder="Please fill in" autocomplete="off" onkeyup="this.value=this.value.toUpperCase()">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nama_el3" class="mb-0">Nama <em class="text-danger">*</em></label>
                            <input class="form-control" id="nama_el3" name="nama_el3" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="wing_el3" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" name="wing_el3" id="wing_el3" type="text" required>
                                <option value="">--Select--</option>
                                <option value="W-A">W-A</option>
                                <option value="W-B">W-B</option>
                                <option value="W-C">W-C</option>
                                <option value="W-D">W-D</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3"> 
                            <label for="lantai_el3" class="mb-0">Lantai <em class="text-danger">*</em></label>
                            <select class="form-control" name="lantai_el3" id="lantai_el3" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Lt1">Lt1</option>
                                <option value="Lt2">Lt2</option>
                                <option value="Lt3">Lt3</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="merk_el3" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <input class="form-control" id="merk_el3" name="merk_el3" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lokasi_el3" class="mb-0">Lokasi <em class="text-danger">*</em></label>
                            <input class="form-control" id="lokasi_el3" name="lokasi_el3" type="text" required placeholder="Please fill in" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="tegangan_el3" class="mb-0">Tegangan</label>
                            <select class="form-control" id="tegangan_el3" name="tegangan_el3" type="text" autocomplete="off">
                                <option value="">--Select--</option>
                                <option value="220 Volt">220 Volt</option>
                                <option value="380 Volt">380 Volt</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="amper_el3" class="mb-0">Amper/Watt</label>
                            <input class="form-control" name="amper_el3" id="amper_el3" type="text" placeholder="Please fill in">
                            <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                            <label for="catatan_el3" class="mb-0">Catatan</label>
                            <textarea class="form-control" name="catatan_el3" id="catatan_el3" type="text" placeholder="Please fill in"></textarea>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>                     
                    <button type="submit" class="btn btn-primary" id="btnTambah">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal-update -->

<!-- modal details -->
          <div class="modal fade bd-example-modal-lg" id="modalDetailEl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div id="modal-body-detail">
                    <table class="table details colorTable">
                        <tr>
                          <th>Amper/Watt</th>
                          <td style="text-transform: capitalize;" id="amper_el4"></td>                  
                        </tr>
                        <tr>
                          <th>Tegangan</th>       
                          <td style="text-transform: capitalize;" id="tegangan_el4"></td>     
                        </tr>
                        <tr>                    
                          <th>Catatan</th>       
                          <td id="catatan_el4"></td>     
                        </tr>                   
                        <tr>
                          <th>Tanggal Update</th>
                          <td id="updated_el4"></td>
                        </tr>
                        <tr>
                          <th style="font-weight: 900">Di tambah</th>
                          <td id="created_el4" style="font-weight: 900"></td>
                        </tr>                    
                    </table>
                  </div>
              </div>
            </div>
          </div>
<!-- end modal details -->

<script src="<?= base_url('assets'); ?>/js/form-validation-custom.js"></script>