<style>
    .erorrs a:hover{
        cursor: pointer;
    }
    .erorrs a{
        color:white !important;
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
                                        <th>Tgl pemasangan</th>             
                                        <th>Refrigerant</th>             
                                        <th>Kapasitas</th>             
                                        <th>Product</th>             
                                        <th>Arus</th>             
                                        <th>Phase</th>             
                                        <th>Tegangan</th>             
                                        <th>Btu</th>             
                                        <th>Status</th>             
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($airco as $ac) : ?>
                                    <tr>
                                        <td><?=$ac->label ?></td>
                                        <td><?=$ac->wing ?></td>
                                        <td><?=$ac->lantai ?></td>
                                        <td><?=$ac->ruangan ?></td>
                                        <td><?=$ac->merk ?></td>    
                                        <td><?=$ac->model ?></td>
                                        <td><?=$ac->jenis ?></td>
                                        <td><?=$ac->tgl_pemasangan ?></td>
                                        <td><?=$ac->refrigerant ?></td>
                                        <td><?=$ac->kapasitas ?></td>
                                        <td><?=$ac->product ?></td>
                                        <td><?=$ac->arus ?> A</td>
                                        <td><?=$ac->phasa ?></td>
                                        <td><?=$ac->tegangan_kerja ?> V</td>
                                        <td><?=$ac->btu ?></td>
                                        <?php if($ac->status == 'Normal') : ?>   
                                        <td>
                                            <span class="badge badge-info"><?=$ac->status ?>           
                                            </span>
                                        </td> 

                                        <?php else : ?>

                                        <td class="erorrs">
                                            <a class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="<?=$ac->jenis_kerusakan  ?>"><?=$ac->status ?>           
                                            </a>
                                        
                                        </td>

                                        <?php endif; ?>                
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
                        <div class="table-responsive">
                            <table class="hover" id="example-style-44">
                                <thead class="myColor">
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Tanggal pengadaaan</th>             
                                        <th>Daya</th>             
                                        <th>Berat</th>             
                                        <th>Status</th>             
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listBarang as $assets) :  ?>
                                    <tr>
                                        <td><?=$assets->nama_barang ?></td>
                                        <td><?=$assets->merk ?></td>
                                        <td><?=$assets->tgl_pengadaan ?></td>
                                        <td><?=$assets->daya?></td>
                                        <td><?=$assets->berat ?></td>
                                        <?php if($assets->status == 'normal') : ?>
                                        <td>
                                            <span class="badge badge-success"><?=$assets->status ?>            
                                            </span>
                                        </td>
                                        <?php elseif($assets->status == 'hilang') : ?>
                                        <td class="erorrs">
                                            <a class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="<?=$assets->catatan  ?>"><?=$assets->status ?>
                                            </a>
                                        </td>
                                        <?php else : ?>
                                        <td class="erorrs">
                                            <a class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="<?=$assets->catatan  ?>"><?= $assets->status; ?>
                                            </a>
                                        </td>
                                        <?php endif; ?>
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
                        <div class="table-responsive">
                            <table class="hover" id="example-style-apart">
                                <thead class="myColor">             
                                    <tr>
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
                                <?php foreach($apart as $apar ) : ?>
                                    <tr>
                                        <td><?=$apar->no_apart ?></td>
                                        <td><?=$apar->wing ?></td>
                                        <td><?=$apar->lantai ?></td>
                                        <td><?=$apar->lokasi ?></td>
                                        <td><?=$apar->merk ?></td>
                                        <td><?=$apar->jenis ?></td>            
                                        <td><?=$apar->berat ?></td>            
                                        <td><?=$apar->tgl_expired ?></td>
                                        <td><?=$apar->tgl_pengadaan ?></td>
                                        <?php if($apar->status == 'Normal') : ?>     
                                        <td class="erorrs">
                                            <span class="badge badge-success"><?=$apar->status ?>
                                            </span>
                                        </td>

                                        <?php else : ?>

                                        <td class="erorrs">
                                            <a class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="<?=$apar->catatan  ?>"><?= $apar->status; ?>
                                            </a>
                                        </td>
                                        
                                        <?php endif; ?>  
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


