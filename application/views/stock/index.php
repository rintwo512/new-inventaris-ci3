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
                        <h5>Data Stock Barang</h5>
                    </div>
                    <div class="card-body">
                        <?php if ($user['role'] == "admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Add Data</button>

                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Tanggal pengadaaan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listBarang as $list) : ?>
                                    <tr>
                                        <td><?= $list['nama_barang']; ?></td>
                                        <td><?= $list['merk']; ?></td>
                                        <td><?= $list['tgl_pengadaan']; ?></td>
                                        <?php if ($list['status'] == 'normal') : ?>
                                        <td><span class="badge badge-success"><?= $list['status']; ?></span></td>
                                        <?php elseif ($list['status'] == 'rusak') : ?>
                                        <td><span class="badge badge-warning"><?= $list['status']; ?></span></td>
                                        <?php else : ?>
                                        <td><span class="badge badge-danger"><?= $list['status']; ?></span></td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="javascript:;" id="updateBarang" data-toggle="modal"
                                                data-target="#modalUpdateBarang" class="btn btn-info btn-xs"
                                                data-id="<?= $list['id']; ?>" data-nama="<?= $list['nama_barang']; ?>"
                                                data-merk="<?= $list['merk']; ?>"
                                                data-pengadaan="<?= $list['tgl_pengadaan']; ?>"
                                                data-catatan="<?= $list['catatan']; ?>"
                                                data-daya="<?= $list['daya']; ?>" data-berat="<?= $list['berat']; ?>"
                                                data-status="<?= $list['status']; ?>"><i class="fa fa-pencil"></i></a>

                                            <a id="detailBarang" class="btn btn-warning btn-xs" data-toggle="modal"
                                                data-target="#modalDetail" data-daya="<?= $list['daya']; ?>"
                                                data-berat="<?= $list['berat']; ?>"
                                                data-catatan="<?= $list['catatan']; ?>"
                                                data-updated="<?= 'Di update oleh' . ' ' . $list['update_by'] . ' ' . date('m/d/Y H:i', $list['updated']); ?>">
                                                <i class="fa fa-info text-white"></i>
                                            </a>
                                            <?php if ($user['role'] == "admin") : ?>
                                            <a id="delBarang" href="<?= base_url('stock/destroy/') . $list['id']; ?>"
                                                class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
                <h4 class="modal-title" id="myLargeModalLabel">Form add data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('stock/store'); ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="nama_barang" class="mb-0">Nama barang <em class="text-danger">*</em></label>
                            <input class="form-control" id="nama_barang" name="nama_barang" type="text"
                                placeholder="Please fill in" required>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="merk" class="mb-0">Merk <em class="text-danger">*</em></label>
                            <input class="form-control" id="merk" name="merk" type="text" placeholder="Please fill in"
                                required="">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tgl_pengadaan" class="mb-0">Tanggal pengadaan</label>
                            <input class="form-control" name="tgl_pengadaan" id="tgl_pengadaan" type="date">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="daya" class="mb-0">Daya <small>( watt/VA )</small><em
                                    class="text-danger">*</em></label>
                            <input class="form-control" name="daya" id="daya" type="text" placeholder="Please fill in"
                                required autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="berat" class="mb-0">Berat</label>
                            <input class="form-control" name="berat" id="berat" type="text" placeholder="Please fill in"
                                autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="status" class="mb-0">Status <em class="text-danger">*</em></label>
                            <select class="form-control" name="status" id="status" type="text"
                                placeholder="Please fill in" required="">
                                <option value="" selected>--Select--</option>
                                <option value="normal">Normal</option>
                                <option value="rusak">Rusak</option>
                                <option value="hilang">Hilang</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                           <div id="note"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnTambah">Submit form</button>
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
            <div id="modal-barang">
                <table class="table details colorTable">
                    <tr>
                        <th>Daya</th>
                        <td id="daya"></td>
                    </tr>
                    <tr>
                        <th>Berat</th>
                        <td id="berat"></td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td id="catatan"></td>
                    </tr>
                    <tr>
                        <th>Updated</th>
                        <td id="updated"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end modal details -->

<!-- modal-update -->
<div class="modal fade bd-example-modal-lg" id="modalUpdateBarang" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Form add data</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="update-modal-body">
                <form action="<?= base_url('stock/update'); ?>" method="post" class="needs-validation" novalidate="">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="nama_barang" class="mb-0">Nama barang</label>
                            <input type="hidden" name="id" id="id">
                            <input class="form-control" id="nama_barang" name="nama_barang" type="text"
                                placeholder="Please fill in" required="">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="merk" class="mb-0">Merk</label>
                            <input class="form-control" id="merk" name="merk" type="text" placeholder="Please fill in"
                                required="">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="tgl_pengadaan" class="mb-0">Tanggal pengadaan</label>
                            <input class="form-control" name="tgl_pengadaan" id="tgl_pengadaan" type="date">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="daya" class="mb-0">Daya <small>( watt/VA )</small></label>
                            <input class="form-control" name="daya" id="daya" type="text" placeholder="Please fill in"
                                required autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="berat" class="mb-0">Berat</label>
                            <input class="form-control" name="berat" id="berat" type="text" placeholder="Please fill in"
                                autocomplete="off">
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="status" class="mb-0">Status</label>
                            <select class="form-control" name="status" id="status" type="text"
                                placeholder="Please fill in" required="">
                                <option value="" selected>--Select--</option>
                                <option value="normal">Normal</option>
                                <option value="rusak">Rusak</option>
                                <option value="hilang">Hilang</option>
                            </select>
                            <div class="invalid-feedback">The field is required</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="catatan">Catatan</label><textarea class="form-control" name="catatan" id="catatan" rows="3" placeholder="Please fill in"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnTambah">Submit form</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end-modal-update -->

<script src="<?= base_url('assets'); ?>/js/form-validation-custom.js"></script>