<style>
  table.details tr:hover{
    background-color: rgba(100,100,100,0.2);
  }
  .colorTable th,
  .colorTable td{
    color:#007bff !important;
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
                    <h5>Data AC</h5>
                  </div>
                  <div class="card-body">
                    <?php if($user['role'] == "admin") :?>

                    <button class="btn btn-primary btn-sm mb-4 pull-right rounded-pill" type="button" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"></i> Tambah data</button>

                     <?php endif;?>

                    <div class="table-responsive">
                      <table class="hover" id="example-style-4">
                        <thead class="myColor">
                          <tr>
                            <th>No.Ac</th>
                            <th>Wing</th>
                            <th>Lantai</th>
                            <th>Ruangan</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th style="text-align: center">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $airco as $ac ) : ?>
                          <tr>                            
                            <td><?=$ac['label'];?></td>
                            <td><?=$ac['wing'];?></td>
                            <td><?=$ac['lantai'];?></td>
                            <td style="text-transform: capitalize;"><?=$ac['ruangan'];?></td>
                            <td><?=$ac['merk'];?></td>
                            <td><?=$ac['model'];?></td>
                            <td><?=$ac['jenis'];?></td>

                            <?php if($ac['status'] == "Normal") : ?>

                              <td>
                                <span class="badge badge-success"><?=$ac['status'];?></span>
                              </td>

                            <?php else : ?>

                              <td>
                                <span class="badge badge-danger"><?=$ac['status'];?></span>
                              </td>

                            <?php endif;?>

                            <td style="text-align: center">

                              <a href="javascript:;" 
                                id="btnUpdate"
                                data-id="<?=$ac['id'];?>"
                                data-label1="<?=$ac['label'];?>"
                                data-aset_ac="<?=$ac['aset'];?>"
                                data-wing="<?=$ac['wing'];?>"
                                data-lantai="<?=$ac['lantai'];?>"
                                data-ruangan="<?=$ac['ruangan'];?>"
                                data-merk="<?=$ac['merk'];?>"
                                data-model="<?=$ac['model'];?>"
                                data-jenis="<?=$ac['jenis'];?>" 
                                data-refrigerant="<?=$ac['refrigerant'];?>"
                                data-kapasitas="<?=$ac['kapasitas'];?>"
                                data-product="<?=$ac['product'];?>"
                                data-tgl_maint="<?= $ac['tgl_maintenance'];?>" data-petugas="<?= $ac['petugas'] ?>"
                                data-tgl_pemasangan="<?=$ac['tgl_pemasangan'];?>"
                                data-status="<?=$ac['status'];?>"
                                data-jenis_kerusakan="<?=$ac['jenis_kerusakan'];?>"
                                data-arus1="<?= $ac['arus'] ?>" 
                                data-status_kompresor="<?= $ac['status_kompresor'] ?>"
                                data-phasa="<?= $ac['phasa'] ?>"
                                data-pipa="<?= $ac['pipa'] ?>"
                                data-btu="<?= $ac['btu'] ?>"
                                data-label1="<?= $ac['label'] ?>"
                                data-tegangan1="<?= $ac['tegangan_kerja'] ?>"
                                class="btn btn-info btn-xs"
                                data-toggle="modal"
                                data-target="#modalUpdate">
                                <i class="fa fa-pencil"></i>
                              </a>


                              <a href="javascript:;"
                                id="btnDetail"
                                class="btn btn-warning btn-xs"
                                data-toggle="modal"
                                data-target="#modalDetail"
                                class="btn btn-warning btn-sm but"
                                data-detail_label_ac="<?= $ac['label']; ?>"
                                data-detail_aset_ac="<?= $ac['aset']; ?>"
                                data-kapasitas="<?= $ac['kapasitas']; ?>"
                                data-refrigerant="<?= $ac['refrigerant']; ?>"
                                data-product="<?= $ac['product']; ?>"
                                data-pemasangan="<?= $ac['tgl_pemasangan']; ?>"
                                data-maintenance="<?= $ac['tgl_maintenance']; ?>"
                                data-petugass="<?=$ac['petugas'] ?>"
                                data-kerusakan="<?= $ac['jenis_kerusakan'] ?>" 
                                data-kompresor="<?= $ac['status_kompresor'] ?>"
                                data-arus="<?= $ac['arus'] ?>" 
                                data-phasa="<?= $ac['phasa'] ?>" 
                                data-pipa="<?= $ac['pipa'] ?>" 
                                data-btu="<?=$ac['btu'] ?>"
                                data-tegangan="<?= $ac['tegangan_kerja'] ?> Volt" data-insert="<?=$ac['insert_by'] ?>"
                                data-update="<?=$ac['update_by']; ?>">
                                <i class="fa fa-info" style="color:#fff"></i>
                              </a>


                              <?php if($user['role'] == "admin") : ?>

                              <a id="btnDel" href="<?= base_url('airco/destroy/') . $ac['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>
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
          <div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myLargeModalLabel">Form tambah data</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <form action="<?=base_url('airco/store');?>" method="post" class="needs-validation" novalidate="">
                      <div class="form-row">                        
                        <div class="col-md-3 mb-3">                          
                          <label for="aset" class="mb-0" style="font-size:13px">Aset</label>
                          <input class="form-control" name="aset" id="aset" type="text" placeholder="Please fill in" onkeyup="this.value=this.value.toUpperCase()" autocomplete="off">
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">                          
                          <label for="label" class="mb-0" style="font-size:13px">No Unit</label><input class="form-control" name="label" id="label_insert" type="text" autocomplete="off" placeholder="Please fill in" onkeyup="this.value=this.value.toUpperCase()">
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">                          
                          <label for="wing" class="mb-0" style="font-size:13px" id="labelWing">Wing <em class="text-danger">*</em></label>
                          <select class="form-control" name="wing" id="wing" type="text" placeholder="Please fill in" required="">
                            <option value="" selected>--Select--</option>
                            <option value="W-A">W-A</option>
                            <option value="W-B">W-B</option>
                            <option value="W-C">W-C</option>
                            <option value="W-D">W-D</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        <div class="col-md-3 mb-3">
                          
                          <div id="inputLantai">

                          </div>                         
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="merk" class="mb-0" style="font-size:13px">Merk <em class="text-danger">*</em></label>
                          <select class="form-control" name="merk" id="merk" type="text" required="">
                            <option value="" selected>--Select--</option>
                            <option value="Daikin">Daikin</option>
                            <option value="Panasonic">Panasonic</option>
                            <option value="LG">LG</option>
                            <option value="Sharp">Sharp</option>
                            <option value="Midea">Midea</option>
                            <option value="Mitsubhisi">Mitsubhisi</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="product" class="mb-0" style="font-size:13px">Product <em class="text-danger">*</em></label>
                          <select class="form-control" name="product" id="product" type="text" placeholder="Please fill in" required="">
                            <option value="" selected>--Select--</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jepang">Jepang</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="China">China</option>
                            <option value="Korea">Korea</option> 
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="model" class="mb-0" style="font-size:13px">Model <em class="text-danger">*</em></label>
                          <select class="form-control" name="model" id="model" type="text" placeholder="Please fill in" required="">
                            <option value="" selected>--Select--</option>
                            <option value="Splite">Splite</option>
                            <option value="Cassette">Cassette</option>
                            <option value="Standing floor">Standing floor</option>
                            <option value="Sentral">Sentral</option>                            
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        <div class="col-md-3 mb-3">                                            
                          <div id="inputKapasitas"></div>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="tgl_pemasangan" class="mb-0" style="font-size:13px">Tanggal pemasangan</label>
                          <input class="form-control" name="tgl_pemasangan" type="date" placeholder="Please fill in">
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="ruangan" class="mb-0" style="font-size:13px">Ruangan <em class="text-danger">*</em></label>
                          <input class="form-control" id="ruangan" name="ruangan" type="text" placeholder="Please fill in" required="" style="text-transform:capitalize">
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="jenis" class="mb-0" style="font-size:13px">Jenis <em class="text-danger">*</em></label>
                          <select class="form-control" name="jenis" id="jenis" type="text" placeholder="Please fill in" required="">
                            <option value="" selected>--Select--</option>
                            <option value="Inverter">Inverter</option>
                            <option value="Standar">Standar</option>                            
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>                                               
                        <div class="col-md-3 mb-3">                         
                          <div id="inputRefrigerant"></div>
                          <div class="invalid-feedback">The field is required</div>
                        </div>                                                                  
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="arus" class="mb-0" style="font-size:13px">Amper <em class="text-danger">*</em></label>
                          <input class="form-control" id="arus" name="arus" type="text" placeholder="Please fill in" required=""autocomplete="off" style="text-transform:capitalize">
                          <?= form_error('arus', '<small class="text-danger">', '</small>');?>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="btu" class="mb-0" style="font-size:13px">Btu/h</label>
                          <input class="form-control" id="btu" name="btu" type="text" placeholder="Please fill in" autocomplete="off">                          
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="pipa"class="mb-0" style="font-size:13px">Pipa liquid dan gas <small>( inch )</small></label>
                            <select class="form-control" name="pipa" id="pipa">
                              <option value="">--Select--</option>
                              <option value="1/4 - 3/8">1/4 - 3/8</option>
                              <option value="1/4 - 1/2">1/4 - 1/2</option>
                              <option value="1/4 - 5/8">1/4 - 5/8</option>
                              <option value="3/8 - 5/8">3/8 - 5/8</option>
                              <option value="3/8 - 3/4">3/8 - 3/4</option>
                              <option value="1/2 - 3/4">1/2 - 3/4</option>
                              <option value="1/2 - 7/8">1/2 - 7/8</option>
                              <option value="1/2 - 1 1/8">1/2 - 1 1/8</option>
                            </select>
                          <div class="invalid-feedback">The field is required</div>                        
                        </div>                      
                        <div class="col-md-3 mb-3">
                          <label for="status" class="mb-0" style="font-size:13px">Status <em class="text-danger">*</em></label>
                          <select class="form-control" name="status" id="status" type="text" placeholder="Please fill in" required="">
                            <option value="" selected>--Select--</option>
                            <option value="Normal">Normal</option>
                            <option value="Rusak">Rusak</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="tegangan_kerja" class="mb-0" style="font-size:13px">Tegangan Kerja <small>( volt )</small> <em class="text-danger">*</em></label>
                          <select class="form-control" id="tegangan_kerja" name="tegangan_kerja" type="text" required>
                            <option value="" selected>--Select--</option>
                            <option value="220">220 Volt</option>
                            <option value="380">380 Volt</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div> 
                         <div class="form-group col-md-6">
                            <label for="phasa" class="mb-0" style="font-size:13px">Arus kerja <small>( phasa )</small> <em class="text-danger">*</em></label>
                            <input class="form-control" name="phasa" id="phasa" required autocomplete="off" placeholder="Please fill in">
                        </div>
                         <div class="form-group col-md-12">
                            <label for="status_kompresor" class="mb-0" style="font-size:13px" placeholder="Please fill in">Status Kompresor <em class="text-danger">*</em></label>
                            <textarea class="form-control" name="status_kompresor" id="status_kompresor" required autocomplete="off" placeholder="Please fill in"></textarea>
                        </div>                           
                      </div>
                      <div class="form-row">                        
                         <div class="form-group col-md-12">
                            <label for="jenis_kerusakan" class="mb-0" style="font-size:13px">Catatan</label>
                            <textarea class="form-control" name="jenis_kerusakan" id="jenis_kerusakan" rows="3" placeholder="Please fill in"></textarea>
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
          <div class="modal fade bd-example-modal-lg" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div id="modal-body">
                    <table class="table details colorTable">                      
                        <tr>
                          <th>No Ac</th>
                          <td id="no_detail_ac"></td>                          
                        </tr>
                        <tr>
                          <th>Aset</th>
                          <td id="aset_detail"></td>                          
                        </tr>
                        <tr>
                          <th>Btu/h</th>
                          <td id="btu"></td>                          
                        </tr>                        
                        <tr>
                          <th>Ukuran pipa liquid/gas <small>(inch)</small></th>
                          <td id="pipa"></td>                          
                        </tr>
                        <tr>
                          <th>Arus kerja ( phasa )</th>
                          <td id="phasa"></td>                          
                        </tr>
                        <tr>
                          <th>Tegangan kerja ( volt )</th>
                          <td id="tegangan_kerja"></td>                          
                        </tr>
                        <tr>
                          <th>Amper</th>
                          <td style="text-transform: capitalize;" id="arus"></td>                          
                        </tr>                        
                        <tr>
                          <th>Tanggal Pemasangan</th>
                          <td><a id="tgl_pemasangan"></a><hr> Petugas pemasangan : <a style="text-transform: capitalize;" id="petugas"></a></td>                 
                        </tr>                      
                        <tr>
                          <th>Product</th>
                          <td id="product"></td>                          
                        </tr>
                        <tr>
                          <th>Tanggal maintenance</th>
                          <td id="tgl_maintenance"></td>
                        </tr>                        
                        <tr>
                          <th>Jenis refrigerant</th>
                          <td id="refrigerant"></td>                          
                        </tr>
                        <tr>
                          <th>Kapasitas</th>
                          <td id="kapasitas"></td>                          
                        </tr>
                        <tr>
                          <th>Status kompresor</th>       
                          <td style="text-transform: capitalize;" id="status_kompresor"></td>     
                        </tr>
                        <tr>
                          <th>Catatan</th>                                      
                          <td id="jenis_kerusakan"></td>                        
                        </tr>
                        <tr>
                          <th>Tanggal Update</th>
                          <td id="updated_at"></td>
                        </tr>
                        <tr>
                          <th style="font-weight: 900">Di tambah</th>
                          <td id="insert_at" style="font-weight: 900"></td>
                        </tr>                    
                    </table>
                  </div>
              </div>
            </div>
          </div>
<!-- end modal details -->


<!-- modal-update -->
          <div class="modal fade bd-example-modal-lg" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myLargeModalLabel">Form update data</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" id="modal-update">
                  <form action="<?=base_url('airco/update');?>" method="post" class="needs-validation" novalidate="">
                      <div class="form-row">
                      <div class="col-md-3 mb-3">
                           <label for="tgl_maintenance" class="mb-0" style="font-size:13px">Tanggal maintenance</label>
                          <input class="form-control digits" id="tgl_maintenancee" name="tgl_maintenance" type="text" placeholder="Please fill in">
                         <div class="invalid-feedback">The field is required</div>
                       </div>                        
                        <div class="col-md-3 mb-3">
                          <label for="wing" class="mb-0" style="font-size:13px">Wing</label>
                          <input type="hidden" name="id" id="id">
                          <select class="form-control" name="wing" id="wing" type="text" placeholder="Please fill in" required="">
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
                          <label for="lantai" class="mb-0" style="font-size:13px">Lantai</label>
                          <select class="form-control" name="lantai" id="lantai" type="text" placeholder="Please fill in" required="">
                           <option value="">--Select--</option>
                            <option value="Lt1">Lt1</option>
                            <option value="Lt2">Lt2</option>
                            <option value="Lt3">Lt3</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        <div class="col-md-3 mb-3">                          
                          <label for="label" class="mb-0" style="font-size:13px">No Unit</label>
                          <input class="form-control" name="label" id="label" type="text" placeholder="Please fill in" onkeyup="this.value=this.value.toUpperCase()">
                          <div class="invalid-feedback">The field is required</div>
                        </div>                       
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="merk" class="mb-0" style="font-size:13px">Merk</label>
                          <select class="form-control" name="merk" id="merk" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="Daikin">Daikin</option>
                            <option value="Panasonic">Panasonic</option>
                            <option value="LG">LG</option>
                            <option value="Sharp">Sharp</option>
                            <option value="Midea">Midea</option>
                            <option value="Mitsubhisi">Mitsubhisi</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="model" class="mb-0" style="font-size:13px">Model</label>
                          <select class="form-control" name="model" id="model" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="Cassette">Cassette</option>
                            <option value="Splite">Splite</option>
                            <option value="Standing floor">Standing floor</option>
                            <option value="Sentral">Sentral</option>
                            <option value="Portable">Portable</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="jenis" class="mb-0" style="font-size:13px">Jenis</label>
                          <select class="form-control" name="jenis" id="jenis" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="Inverter">Inverter</option>
                            <option value="Standar">Standar</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas</label>
                          <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="1pk">1pk</option>
                            <option value="1,5pk">1,5pk</option>
                            <option value="2pk">2pk</option>
                            <option value="2,5pk">2,5pk</option>
                            <option value="3pk">3pk</option>                            
                            <option value="5pk">5pk</option>
                            <option value="8pk">8pk</option>
                            <option value="10pk">10pk</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="tgl_pemasangan" class="mb-0" style="font-size:13px">Tanggal pemasangan</label>
                          <input class="form-control digits" name="tgl_pemasangan" id="tgl_pemasangann" type="text" placeholder="Please fill in">
                          <div class="invalid-feedback">The field is required</div>
                        </div>                        
                        <div class="col-md-3 mb-3">
                          <label for="refigerant" class="mb-0" style="font-size:13px">Type refigerant</label>
                          <select class="form-control" name="refrigerant" id="refrigerant" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="R410">R410</option>
                            <option value="R22">R22</option>
                            <option value="R32">R32</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="ruangan" class="mb-0" style="font-size:13px">Ruangan</label>
                          <input class="form-control" id="ruangan" name="ruangan" type="text" placeholder="Please fill in" required="" autocomplete="off" style="text-transform: capitalize;">
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="product" class="mb-0" style="font-size:13px">Product</label>
                          <select class="form-control" name="product" id="product" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jepang">Jepang</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="China">China</option>
                            <option value="Korea">Korea</option> 
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                      <div class="form-row"> 
                      <div class="col-md-3 mb-3">
                          <label for="arus" class="mb-0" style="font-size:13px">Amper</label>
                          <input class="form-control" id="arus" name="arus" type="text" placeholder="Please fill in" required autocomplete="off" style="text-transform: capitalize;">
                          <?= form_error('arus', '<small class="text-danger">', '</small>');?>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="btu" class="mb-0" style="font-size:13px">Btu/h</label>
                          <input class="form-control" id="btu2" name="btu" type="text" placeholder="Please fill in">                         
                        </div>
                        <div class="form-group col-md-3">
                            <label for="pipa"class="mb-0" style="font-size:13px">Pipa liquid dan gas <small>( inch )</small></label>
                            <select class="form-control" name="pipa" id="pipa">
                              <option value="">--Select--</option>
                              <option value="1/4 - 3/8">1/4 - 3/8</option>
                              <option value="1/4 - 1/2">1/4 - 1/2</option>
                              <option value="1/4 - 5/8">1/4 - 5/8</option>
                              <option value="3/8 - 5/8">3/8 - 5/8</option>
                              <option value="3/8 - 3/4">3/8 - 3/4</option>
                              <option value="1/2 - 3/4">1/2 - 3/4</option>
                              <option value="1/2 - 7/8">1/2 - 7/8</option>
                              <option value="1/2 - 1 1/8">1/2 - 1 1/8</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="status" class="mb-0" style="font-size:13px">Status</label>
                          <select class="form-control" name="status" id="statuss" type="text" placeholder="Please fill in" required="">
                            <option value="">--Select--</option>
                            <option value="Normal">Normal</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                      </div>
                       <div class="form-row">                        
                         <div class="form-group col-md-3">
                            <label for="phasa" class="mb-0" style="font-size:13px">Arus kerja <small>( Phasa )</small></label>
                            <select class="form-control" name="phasa" id="phasa" required value="">
                              <option value="">--Select--</option>
                              <option value="1 phasa">1 Phasa</option>
                              <option value="3 phasa">3 Phasa</option>
                            </select>                              
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="tegangan_kerja" class="mb-0" style="font-size:13px">Tegangan kerja <small>( volt )</small></label>
                          <select class="form-control" id="tegangan_kerja" name="tegangan_kerja" type="text" required>
                            <option value="" selected>--Select--</option>
                            <option value="220">220 Volt</option>
                            <option value="380">380 Volt</option>
                          </select>
                          <div class="invalid-feedback">The field is required</div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="petugas" class="mb-0" style="font-size:13px">Petugas pemasangan</label>
                          <input class="form-control" id="petugas" name="petugas" type="text" placeholder="Please fill in" style="text-transform: capitalize;">
                         <div class="invalid-feedback">The field is required</div>
                       </div>
                       <div class="col-md-3 mb-3">
                           <label for="aset_update" class="mb-0" style="font-size:13px">Aset</label>
                          <input class="form-control" id="aset_update" name="aset_update" type="text" placeholder="Please fill in" onkeyup="this.value=this.value.toUpperCase()" autocomplete="off">
                         <div class="invalid-feedback">The field is required</div>
                       </div>
                        <div class="col-md-12 mb-3">
                          <label for="status_kompresor" class="mb-0" style="font-size:13px">Status kompresor</label>
                          <textarea class="form-control" id="status_kompresor" name="status_kompresor" type="text" required autocomplete="off"></textarea>
                          <div class="invalid-feedback">The field is required</div>
                        </div>   
                      </div>
                      <div class="form-row">
                         <div class="form-group col-md-12">
                            <label for="jenis_kerusakan" class="mb-0" id="bint" style="font-size:13px">Catatan</label>
                            <textarea class="form-control" name="jenis_kerusakan" id="jenis_kerusakann" rows="3" placeholder="Please fill in" autocomplete="off"></textarea>
                          </div>
                      </div>                    
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        <!-- end-modal-update -->

        

<script src="<?=base_url('assets');?>/js/form-validation-custom.js"></script>




