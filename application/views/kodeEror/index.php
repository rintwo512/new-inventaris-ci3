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
                    <h5>Cara mencari kode error ac cassete daikin</h5>
                  </div>
                  <div class="card-body">
                    <p>Pertama arahkan remote control pada unit indoor yang error kemudian pada remote control terdapat tombol <strong>test</strong> silahkan di tekan,maka pada display remote control muncul 2 digit angka <strong style="color:red">00</strong>,kemudian tekan tombol <strong>mode</strong> sampai angka pertama flashing/berkedip,kemudian tekan tombol <strong>up</strong> atau <strong>down</strong> sampai terdengar bunyi bip 2 kali,setelah kode pertama sudah di temukan,sekarang kita mencari kode kedua dengan cara menekan kembali tombol <strong>mode</strong> sampai angka ke 2 pada display remote control flashing/berkdeip,kemudian tekan tombol <strong>up</strong> atau <strong>down</strong> sampai terdengar bunyi bip yang panjang,setelah kedua kode error sudah di temukan sekarang kita melihat list kode error di bawah ini.</p>
                  </div>                              
                    <div class="card-header">
                        <h5>Kode Eror daikin</h5>                       
                    </div>
                    <div class="card-body">

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


<div class="page-body mt-5">
    <!-- Container-fluid starts-->
    <div class="container-fluid mt-5">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                    <h5>Cara mencari kode error Ac split panasonic</h5>
                  </div>
                  <div class="card-body">
                    <p>Tekan dan tahan tombol <strong>check</strong> selama lebih kurang lebih sekitar 5 detik,harusnya display pada remote menunjukkan tanda <strong style="color:red">– –</strong>, 
                    kemudian arahkan remote ke indoor dan tekan tombol <strong>timer</strong>,setiap kali tombol ditekan, kode kesalahan akan ditampilkan dan lampu indikator power pada indoor akan flashing/berkdeip sekali untuk mengkonfirmasi sinyal,lakukan terus sampai terdengar bunyi bip panjang pada indoor dan pada display remote harusnya kode error sudah muncul,untuk keluar dari mode ini tekan tombol <strong>check</strong> selama 5 detik</p>
                  </div>         
                    <div class="card-header">
                        <h5>Kode Eror panasonic</h5>              
                    </div>
                    <div class="card-body">

                        <!-- <?php if ($user['role'] == "admin" || $user['role'] == "super admin") : ?>

                        <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button"
                            data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i>    Tambah data</button>

                        <?php endif; ?> -->
                        <a href="<?=base_url('airco'); ?>" class="btn btn-primary btn-sm mb-4 pull-right rounded mr-2">Kembali</a>

                        <div class="table-responsive">
                            <table class="hover" id="example-style-44">
                                <thead class="myColor">
                                    <tr>
                                        <th style="text-align: center" width="10%">Kode</th>
                                        <th>Kerusakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($panasonic as $pns) : ?>
                                <tr>
                                    <td align="center"><?=$pns['kode']; ?></td>
                                    <td><?=$pns['kerusakan'] ?></td>                           
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
                          <input class="form-control" name="kode" id="kode" type="text" placeholder="Please fill in">
                         
                        </div>
                        <div class="form-group col-md-12">
                            <label for="kerusakan" class="mb-0" style="font-size:13px">Catatan</label>
                            <textarea class="form-control" name="kerusakan" id="kerusakan" rows="3" placeholder="Please fill in"></textarea>
                          </div>                          
                    </div>                    
                    <button type="submit" class="btn btn-primary" id="btnTambah">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end-modal-update -->

