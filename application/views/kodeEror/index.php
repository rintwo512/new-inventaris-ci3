<style>
table.details tr:hover {
    background-color: rgba(100, 100, 100, 0.2);
}

.colorTable th,
.colorTable td {
    color: #007bff !important;
}
</style>

<div class="page-body mt-5">
    <!-- Container-fluid starts-->
    <div class="container-fluid mt-5">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <h5>Kode Eror daikin</h5>                       
                    </div>
                    <div class="card-body">

                        <!-- <?php if ($user['role'] == "admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i>    Tambah data</button>

                        <?php endif; ?> -->
                        <a href="<?=base_url('airco'); ?>" class="btn btn-primary btn-sm mb-4 pull-right rounded mr-2">Kembali</a>

                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr>
                                        <th style="text-align: center" width="10%">Kode</th>
                                        <th>Kerusakan</th>
                                        <th>Penyebab</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($daikin as $code) : ?>
                                <tr>
                                    <td align="center"><?=$code['code'] ?></td>
                                    <td><?= $code['fault'] ?></td>
                                    <td><?= $code['cause'] ?></td>
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





<!-- modal-update -->
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form tambah data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="modal-body-grafik">
                <form action="<?=base_url('kodeeror/store') ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                       <div class="col-md-3 mb-3">                          
                          <label for="aset" class="mb-0" style="font-size:13px">kode</label>
                          <input class="form-control" name="kode" id="aset" type="text" placeholder="Please fill in">
                         
                        </div>
                        <div class="form-group col-md-12">
                            <label for="kerusakan" class="mb-0" style="font-size:13px">Catatan</label>
                            <textarea class="form-control" name="kerusakan" id="kerusakan" rows="3" placeholder="Please fill in"></textarea>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="sebab" class="mb-0" style="font-size:13px">Peneyebab</label>
                            <textarea class="form-control" name="sebab" id="sebab" rows="3" placeholder="Please fill in"></textarea>
                          </div>
                    </div>                    
                    <button type="submit" class="btn btn-primary" id="btnTambah">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end-modal-update -->

