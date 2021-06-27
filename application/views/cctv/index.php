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
                        <h5>Data CCTV</h5>                       
                    </div>
                    <div class="card-body">
                    <?php if($user['role'] == "admin" || $user['role'] == 'super admin') : ?>
                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Tambah data</button>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr>
                                        <th>No.Camera</th>
                                        <th>Wing</th>
                                        <th>Lantai</th>
                                        <th>Lokasi</th>
                                        <th>Merk</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                        <th style="text-align: center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($camera as $cctv) : ?>
                                    <tr>
                                        <td><?= $cctv['no_camera'] ?></td>
                                        <td><?= $cctv['wing'] ?></td>
                                        <td><?= $cctv['lantai'] ?></td>
                                        <td style="text-transform: capitalize;">
                                        <?= $cctv['lokasi'] ?></td>
                                        <td><?= $cctv['merk'] ?></td>
                                        <td><?= $cctv['jenis'] ?></td>
                                        <?php if($cctv['status'] == "Normal") : ?>
                                        <td><span class="badge badge-success"><?=$cctv['status'] ?></span>
                                        </td>
                                        <?php else : ?>
                                        <td><span class="badge badge-danger"><?=$cctv['status'] ?></span>
                                        </td>
                                        <?php endif; ?>
                                        <td style="text-align: center">

                                            <a id="btnUpdateCctv" href="javascript:;" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalUpdateCctv" data-id_cam="<?=$cctv['id'] ?>"
                                            data-no_cam="<?=$cctv['no_camera'] ?>"
                                            data-wing_cam="<?=$cctv['wing'] ?>"
                                            data-lantai_cam="<?=$cctv['lantai'] ?>"
                                            data-lokasi_cam="<?=$cctv['lokasi'] ?>"
                                            data-merk_cam="<?=$cctv['merk'] ?>"
                                            data-jenis_cam="<?=$cctv['jenis'] ?>"
                                            data-power_cam="<?=$cctv['pwr_supplay'] ?>"
                                            data-sensor_cam="<?=$cctv['sensor_gambar'] ?>"
                                            data-pengadaan_cam="<?=$cctv['tgl_pengadaan'] ?>"
                                            data-catatan_cam="<?=$cctv['catatan'] ?>"
                                            data-status_cam="<?=$cctv['status'] ?>">
                                            <i class="fa fa-pencil"></i>
                                            </a>

                                            <a id="btnDetailCctv" href="javascript:;" data-toggle="modal" data-target="#modalDetail" class="btn btn-warning btn-xs" data-power_cctv="<?=$cctv['pwr_supplay'] ?>"
                                            data-sensor_cctv="<?=$cctv['sensor_gambar'] ?>"
                                            data-pengadaan_cctv="<?=$cctv['tgl_pengadaan'] ?>"
                                            data-catatan_cctv="<?=$cctv['catatan'] ?>"
                                            data-created_cctv="<?=$cctv['created_by'] ?>"
                                            data-updated_cctv="<?=$cctv['updated_by'] ?>">    
                                            <i class="fa fa-info"></i>
                                            </a>
                                            <?php if($user['role'] == "admin" || $user['role'] == "super admin") : ?>
                                            <a id="btnDeleteCctv" href="<?=base_url('cctv/destroy/') . $cctv['id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form tambah data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('cctv/store'); ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="tgl_pengadaan" class="mb-0">Tanggal Pengadaan</label>
                            <input class="form-control" id="tgl_pengadaan" name="tgl_pengadaan" type="date">                   
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="no_camera" class="mb-0">No.Camera</label>
                            <input class="form-control" id="no_camera" name="no_camera" type="text" placeholder="Please fill in" onkeypress="return event.charCode >= 48 && event.charCode <=57" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="wing" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" id="wing_cctv" name="wing" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="W-A">W-A</option>
                                <option value="W-B">W-B</option>
                                <option value="W-C">W-C</option>
                                <option value="W-D">W-D</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div id="lantai_cctv"></div>                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="lokasi" class="mb-0">Lokasi <em class="text-danger">*</em></label>
                            <input class="form-control" name="lokasi" id="lokasi" type="text" placeholder="Please fill in"
                                required autocomplete="off" style="text-transform:capitalize;">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="merk" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <select class="form-control" name="merk" id="merk" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Hikvision">Hikvision</option>
                                <option value="Dahua">Dahua</option>
                                <option value="Edge">Edge</option>
                                <option value="Space">Space</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="jenis" class="mb-0">Jenis <em class="text-danger">*</em></label>
                            <select class="form-control" name="jenis" id="jenis" type="text" required>
                                <option value="" selected>--Select--</option>
                                <option value="Ip Camera">Ip Camera</option>
                                <option value="Analog">Analog</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                           <label for="sensor" class="mb-0">Sensor Gambar <em class="text-danger">*</em></label>
                            <select class="form-control" name="sensor" id="sensor" type="text" required>
                                <option value="">--Select--</option>
                                <option value="1,5MP">1,5MP</option>
                                <option value="2MP">2MP</option>
                                <option value="3MP">3MP</option>
                                <option value="4MP">4MP</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="power" class="mb-0">Power Supplay <em class="text-danger">*</em></label>
                            <select class="form-control" name="power" id="power" type="text" required>
                                <option value="" selected>--Select--</option>
                                <option value="12VDC">12VDC</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="status_cctv" class="mb-0">Status <em class="text-danger">*</em></label>
                            <select class="form-control" name="status" id="status_cctv" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Normal">Normal</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                           <div id="catatan_cctv"></div>
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
<div class="modal fade bd-example-modal-lg" id="modalDetail" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>         
            <div id="modal-cctv">
                <table class="table details colorTable">
                    <tr>
                        <th>Power Supplay</th>
                        <td id="power_detail"></td>
                    </tr>
                    <tr>
                        <th>Sensor Gambar</th>
                        <td id="sensor_detail"></td>
                    </tr>
                    <tr>
                        <th>Tanggal Pengadaan</th>
                        <td id="pengadaan_detail"></td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td id="catatan_detail"></td>
                    </tr>                  
                    <tr>
                        <th>Tanggal updated</th>
                        <td id="updated_detail"></td>
                    </tr>
                    <tr>
                        <th style="font-weight: 900">Ditambah</th>
                        <td id="created_detail" style="font-weight: 900"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end modal details -->

<!-- modal-update -->
<div class="modal fade bd-example-modal-lg" id="modalUpdateCctv" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form update data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="modal-body-update-cctv">
                <form action="<?=base_url('cctv/updated') ?>" method="post" class="needs-validation" novalidate="">
                    <input type="hidden" name="id_update" id="id_update">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="tgl_pengadaan_update" class="mb-0">Tanggal Pengadaan</label>
                            <input class="form-control" id="tgl_pengadaan_update" name="tgl_pengadaan" type="date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="no_camera" class="mb-0">No.Camera</label>
                            <input class="form-control" id="no_camera_update" name="no_camera" type="text" placeholder="Please fill in" onkeypress="return event.charCode >= 48 && event.charCode <=57" autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="wing_update" class="mb-0">Wing <em class="text-danger">*</em></label>
                            <select class="form-control" id="wing_update" name="wing" type="text" required>
                                <option value="">--Select--</option>
                                <option value="W-A">W-A</option>
                                <option value="W-B">W-B</option>
                                <option value="W-C">W-C</option>
                                <option value="W-D">W-D</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label>
                            <select class="form-control" id="lantai_update" name="lantai" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="Lt1">Lt1</option>
                                <option value="Lt2">Lt2</option>
                                <option value="Lt3">Lt3</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="lokasi_update" class="mb-0">Lokasi <em class="text-danger">*</em></label>
                            <input class="form-control" name="lokasi" id="lokasi_update" type="text" placeholder="Please fill in" required autocomplete="off" style="text-transform: capitalize;">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="merk_update" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <select class="form-control" name="merk" id="merk_update" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Hikvision">Hikvision</option>
                                <option value="Dahua">Dahua</option>
                                <option value="Edge">Edge</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="jenis_update" class="mb-0">Jenis <em class="text-danger">*</em></label>
                            <select class="form-control" name="jenis" id="jenis_update" type="text" required>
                                <option value="" selected>--Select--</option>
                                <option value="Ip Camera">Ip Camera</option>
                                <option value="Analog">Analog</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                           <label for="sensor_update" class="mb-0">Sensor Gambar <em class="text-danger">*</em></label>
                            <select class="form-control" name="sensor" id="sensor_update" type="text" required>
                                <option value="">--Select--</option>
                                <option value="1,5MP">1,5MP</option>
                                <option value="2MP">2MP</option>
                                <option value="3MP">3MP</option>
                                <option value="4MP">4MP</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="power_update" class="mb-0">Power Supplay <em class="text-danger">*</em></label>
                            <select class="form-control" name="power" id="power_update" type="text" required>
                                <option value="" selected>--Select--</option>
                                <option value="12VDC">12VDC</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="status_update" class="mb-0">Status <em class="text-danger">*</em></label>
                            <select class="form-control" name="status" id="status_update_cctv" type="text" required>
                                <option value="">--Select--</option>
                                <option value="Normal">Normal</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                           <label for="catatan_update" class="mb-0">Catatan</label><textarea class="form-control" name="catatan" id="catatan_update_cctv" rows="3" placeholder="Please fill in" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnTambah">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end-modal-update -->

<script src="<?= base_url('assets'); ?>/js/form-validation-custom.js"></script>