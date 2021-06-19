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
                        <h5>Data maintenance AC</h5>                       
                    </div>
                    <div class="card-body">
                        <?php if ($user['role'] == "admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalTambahDataGrafik"><i class="fa fa-plus"></i>    Tambah data</button>

                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr style="text-align: center">
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                        <th>Jumlah unit</th>                    
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($get_data as $graf ) : ?>                                   
                                    <tr style="text-align: center">
                                        <td><?=$graf['tahun'] ?></td>
                                        <td><?=$graf['bulan'] ?></td>
                                        <td width="20%"><?=$graf['unit'] ?></td>
                                        <td>
                                            <a id="btnUpdateGrafik"
                                             href="javascript:;" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalUpdateGrafik" 
                                            data-id="<?=$graf['id'] ?>"
                                            data-tahun="<?=$graf['tahun'] ?>"
                                            data-bulan="<?=$graf['bulan'] ?>"
                                            data-unit="<?=$graf['unit'] ?>">
                                            <i class="fa fa-pencil"></i>
                                            </a>

                                            <?php if($user['role'] == "admin") : ?>

                                              <a id="btnDeleteDataGrafik" href="<?= base_url('chart_ac/destroy/') . $graf['id']; ?>" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i>
                                              </a>

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
<div class="modal fade bd-example-modal-lg" id="modalTambahDataGrafik" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form tambah data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('chart_ac/storeDataGrafik') ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="tahun" class="mb-0">Tahun</label>
                            <select class="form-control" id="tahun" name="tahun" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>  
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bulan" class="mb-0">Bulan</label>
                            <select class="form-control" id="bulan" name="bulan" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="unit" class="mb-0">Unit</label>
                            <input class="form-control" name="unit" id="unit" type="number">
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
<div class="modal fade bd-example-modal-lg" id="modalUpdateGrafik" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form update data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="modal-body-grafik">
                <form action="<?=base_url('chart_ac/updateDataGrafik') ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="tahun" class="mb-0">Tahun</label>
                            <input type="hidden" name="id" id="id">
                            <select class="form-control" id="tahun" name="tahun" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>  
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="bulan" class="mb-0">Bulan</label>
                            <select class="form-control" id="bulan" name="bulan" type="text" required="">
                                <option value="">--Select--</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="unit" class="mb-0">Unit</label>
                            <input class="form-control" name="unit" id="unit" type="number">
                            <div class="invalid-feedback">The field is required</div>
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