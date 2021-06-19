<!-- content-here -->
         <div class="page-body">
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
             <div class="col-md-12 mt-5">                                        
                        <div class="col-md-3 mb-2">
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">----Pilih Tahun----</option>
                                <?php
                                foreach ($year_list->result_array() as $row) {

                                    echo '<option value="' . $row['tahun'] . '">' . $row['tahun'] . '</option>';
                                }
                                ?>

                            </select>
                        </div>
                    
                    <div class="card mb-5">                      
                        <div id="charts_area" style="width:100%; height:400px;">
                        </div>
                    </div>
                    <!-- /.box-body -->               

            </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- end content -->