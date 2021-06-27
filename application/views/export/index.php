<style>
   .removeRow{
    background-color: #FD517D !important;
    color: #FFFFFF;
   }
   .bgColor{
    background-color: #212121;
   }
  .bgColor tr th{
    color:aliceblue !important;
  }
  .hover-items:hover{
    background-color: rgba(100,100,100,0.2);
  }
</style>
<!-- content-here -->
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Master data AC</h5>
                    </div>
                    <div class="card-body">                        
                    <a href="<?=base_url('export/data_ac');?>" class="btn btn-primary btn-sm mb-4 pull-right"><i class="fa fa-file-excel-o"></i> Export Excel</a>
                    <div class="form-group col-md-3">
                        <div class="input-group">                            
                            <input type="text" name="search_ac" id="search_ac" placeholder="Search" class="form-control rounded">
                        </div>
                    </div> 
                    <div class="table-responsive">                        
                        <div id="result"></div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end myTable -->
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <div class="container-fluid">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Master data CCTV</h5>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('export/dataCctv') ?>" class="btn btn-primary btn-sm mb-4 pull-right"><i class="fa fa-file-excel-o"></i> Export excel</a>
                        <button type="button" class="btn btn-danger btn-sm" id="delete_all_cctv"><i class="fa fa-trash"></i> Delete</button>
                        <div class="table-responsive">
                            <table class="hover" id="example-style-4">
                                <thead class="myColor">
                                    <tr>
                                        <th width="8%">#</th>
                                        <th>No camera</th>
                                        <th>Wing</th>
                                        <th>Lantai</th>
                                        <th>Lokasi</th>
                                        <th>Merk</th>
                                        <th>Jenis</th>
                                        <th>Sensor gambar</th>
                                        <th>Tanggal pengadaaan</th>
                                        <th>Status</th>             
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($cctv->result() as $cam)
                                 {
                                    echo '

                                        <tr class="hover-items">
                                                <td>
                                                    <input type="checkbox" class="delete_checkbox_cctv" value="'.$cam->id.'"/>
                                                </td>
                                                <td>'.$cam->no_camera.'</td>
                                                <td>'.$cam->wing.'</td>
                                                <td>'.$cam->lantai.'</td>
                                                <td style="text-transform: capitalize;">'.$cam->lokasi.'</td>
                                                <td>'.$cam->merk.'</td>
                                                <td>'.$cam->jenis.'</td>
                                                <td>'.$cam->sensor_gambar.'</td>
                                                <td>'.$cam->tgl_pengadaan.'</td>
                                                <td>'.$cam->status.'</td>
                                            </tr>

                                    ';

                                 } ?>
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
    <!-- Container-fluid Ends-->
    <div class="container-fluid">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Master data assets ME</h5>
                    </div>
                    <div class="card-body">
                        <a href="<?=base_url('export/index');?>" class="btn btn-primary btn-sm mb-4 pull-right"><i class="fa fa-file-excel-o"></i> Export excel</a>
                        <button type="button" class="btn btn-danger btn-sm" id="delete_all_list"><i class="fa fa-trash"></i> Delete</button>
                        <div class="table-responsive">
                            <table class="hover" id="example-style-44">
                                <thead class="myColor">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Tanggal pengadaaan</th>             
                                        <th>Daya</th>             
                                        <th>Berat</th>             
                                        <th>Status</th>             
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($listBarang->result() as $list )
                                    {
                                        echo '
                                            <tr class="hover-items">
                                                <td>
                                                    <input type="checkbox" class="delete_checkbox_list_barang" value="'.$list->id.'"/>
                                                </td>
                                                <td style="text-transform: capitalize;">'.$list->nama_barang.'</td>
                                                <td style="text-transform: capitalize;">'.$list->merk.'</td>
                                                <td>'.$list->tgl_pengadaan.'</td>
                                                <td>'.$list->daya.'</td>
                                                <td>'.$list->berat.'</td>
                                                <td style="text-transform: capitalize;">'.$list->status.'</td>
                                            </tr>
                                        ';
                                    }

                                  ?>
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
    <!-- Container-fluid Ends-->
    <div class="container-fluid">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Master data Apart</h5>
                    </div>
                    <div class="card-body">
                        <a href="<?=base_url('export/dataApart');?>" class="btn btn-primary btn-sm mb-4 pull-right"><i class="fa fa-file-excel-o"></i> Export excel</a>
                        <button type="button" class="btn btn-danger btn-sm" id="delete_all_apar"><i class="fa fa-trash"></i> Delete</button>
                        <div class="table-responsive">
                            <table class="hover" id="example-style-apart">
                                <thead class="myColor">             
                                    <tr>
                                        <th width="8%">#</th>
                                        <th>No.apart</th>
                                        <th>Wing</th>
                                        <th>Lantai</th>
                                        <th>Lokasi</th>             
                                        <th>Merk</th>             
                                        <th>Jenis</th>             
                                        <th>Berat</th>             
                                        <th>Tanggal expired</th>             
                                        <th>Tanggal pengadaan</th>             
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach($apart->result() as $apr)
                                    {
                                        echo 
                                        '
                                            <tr class="hover-items">
                                                <td>
                                                    <input type="checkbox" class="delete_checkbox_apar" value="'.$apr->id.'"/>
                                                </td>
                                                <td>'.$apr->no_apart.'</td>
                                                <td>'.$apr->wing.'</td>
                                                <td>'.$apr->lantai.'</td>
                                                <td style="text-transform: capitalize;">'.$apr->lokasi.'</td>
                                                <td>'.$apr->merk.'</td>
                                                <td>'.$apr->jenis.'</td>
                                                <td>'.$apr->berat.'</td>
                                                <td>'.$apr->tgl_expired.'</td>
                                                <td>'.$apr->tgl_pengadaan.'</td>
                                                <td>'.$apr->status.'</td>
                                            </tr>
                                        ';
                                    }


                                 ?>           
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
    <!-- Container-fluid Ends-->
    <div class="container-fluid">
        <div class="row">
            <!--myTable-->
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Master data maintenance Ac</h5>
                    </div>
                    <div class="card-body">                        
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <input type="text" name="search_maint" id="search_maint" placeholder="Search" class="form-control rounded">
                            </div>
                        </div> 
                        <div class="table-responsive">
                           <div id="result2"></div>
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


