 <!-- latest jquery-->
 <script src="<?= base_url('assets'); ?>/js/jquery-3.5.1.min.js"></script>
 <!-- Bootstrap js-->
 <script src="<?= base_url('assets'); ?>/js/bootstrap/popper.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/bootstrap/bootstrap.js"></script>
 <!-- feather icon js-->
 <script src="<?= base_url('assets'); ?>/js/icons/feather-icon/feather.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/icons/feather-icon/feather-icon.js"></script>
 <!-- Sidebar jquery-->
 <script src="<?= base_url('assets'); ?>/js/sidebar-menu.js"></script>
 <script src="<?= base_url('assets'); ?>/js/config.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/date-picker/datepicker.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/date-picker/datepicker.en.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/date-picker/datepicker.custom.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/daterange-picker/moment.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/daterange-picker/daterangepicker.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>
 <!-- Plugins JS start-->
 <script src="<?= base_url('assets'); ?>/js/owlcarousel/owl.carousel.js"></script>
 <script src="<?= base_url('assets'); ?>/js/prism/prism.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/clipboard/clipboard.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/counter/jquery.waypoints.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/counter/jquery.counterup.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/counter/counter-custom.js"></script>
 <script src="<?= base_url('assets'); ?>/js/custom-card/custom-card.js"></script>


 <script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datatable/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('assets'); ?>/js/datatable/datatables/datatable.custom.js"></script>
 <script src="<?= base_url('assets'); ?>/js/chat-menu.js"></script>
 <script src="<?= base_url('assets'); ?>/js/general-widget.js"></script>
 <script src="<?= base_url('assets'); ?>/js/height-equal.js"></script>
 <script src="<?= base_url('assets'); ?>/js/tooltip-init.js"></script>
 <script src="<?= base_url('assets'); ?>/js/autoNumeric/autoNumeric.js"></script>
 <script src="<?= base_url('assets'); ?>/js/autoNumeric/autoNumeric-custom.js"></script>
 

 <!-- Plugins JS Ends-->
 <!-- Theme js-->

 <script src="<?= base_url('assets'); ?>/js/script.js"></script>
 <script src="<?= base_url('assets'); ?>/js/theme-customizer/customizer.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/myValidate.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/myValidateListBarang.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/success.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/list-ac.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/list-barang.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/list-users.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/apart.js"></script>
 <script type="text/javascript" src="<?= base_url('assets'); ?>/js/loader.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/chart_ac.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/cctv.js"></script>
 <script src="<?= base_url('assets'); ?>/myscript/elektronik.js"></script>

 <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    
    // Pusher.logToConsole = true;

    // var pusher = new Pusher('6f05f9b8c9309811888c', {
    //   cluster: 'ap1'
    // });

    // var channel = pusher.subscribe('my-channel');
    // channel.bind('my-event', function(data) {
    //   alert(JSON.stringify(data));
      
      
    // });
  </script>
 
 
 
 <!-- <script>
    $(document).ready(function() {
        var interval = setInterval(function() {
            $.ajax({
                url: "<?= base_url(); ?>Notif/get_ajax",
                type: "POST",
                dataType: "json",
                data: {},
                success: function(data) {
                    $('#notif').html(data.tot);                        
                }
            });
        }, 2000);
    });   
</script> -->


<script>
    $(document).ready(function() {
        $('#alertPassword').on('click', function() {
            $('#alertPassword').hide(700);
        });
    });
</script>


<script>
    $('.custom-file-input').on('change', function(){

        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);

    });
</script>
<script>
$(document).ready(function() {
    $(document).on('click', '#logout', function(e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin keluar ?',
            imageUrl: "<?= base_url('assets/img/banner2.png'); ?>",
            imageWidth: 700,
            imageHeight: 300,
            imageAlt: 'Custom image'

        }).then((result) => {
            if (result.value) {
                document.location.href = href;

            }
        });
    });
});
</script>


<script type="text/javascript">
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback();

    function load_montwise_data(tahun, title) {
        var temp_title = title + ' ' + tahun;
        $.ajax({
            url: "<?php echo base_url(); ?>Chart_ac/ambil_data_chart",
            method: "POST",
            data: {
                tahun: tahun
            },
            dataType: "JSON",
            success: function(data) {
                drawMonthwiseChart(data, temp_title);
            }
        })
    }

    function drawMonthwiseChart(chart_data, chart_main_title) {
        var jsonData = chart_data;
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'bulan');
        data.addColumn('number', 'Unit');

        $.each(jsonData, function(i, jsonData) {
            var bulan = jsonData.bulan;
            var unit = jsonData.unit;
            data.addRows([
                [bulan, unit]
            ]);
        });

        var options = {
            title: chart_main_title,
            hAxis: {
                title: "Bulan"
            },
            vAxis: {
                title: 'Rata-rata'
            }
        }

        var chart = new google.visualization.ColumnChart(document.getElementById('charts_area'));
        chart.draw(data, options);
    }
    </script>

    <script>
    $(document).ready(function() {
        $('#tahun').change(function() {
            var tahun = $(this).val();
            if (tahun != '') {
                load_montwise_data(tahun, 'Grafik Maintenance Ac Tahun');
            }
        });
    });
    </script>


    <!-- Air Conditioner -->
    <script>
    $(document).ready(function(){

        load_data();

        function load_data(query)
        {
            $.ajax({
                url:"<?php echo base_url();?>master/search_Ac",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            })
        }

        $('#search_ac').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });

        $('body').on("click",".delete_checkbox", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all", function(){

        var checkbox = $('.delete_checkbox:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
             Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataAc",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });

    });
</script>
<!-- End Air Conditioner -->

<!-- Assets ME -->
<script>
$(document).ready(function(){

    $('body').on("click",".delete_checkbox_list_barang", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all_list", function(){

        var checkbox = $('.delete_checkbox_list_barang:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataListBarang",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Sukses!',
                  'Data berhasil dihapus',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });    

});
</script>
<!-- End Assets ME -->

<!-- Apart -->
<script>
$(document).ready(function(){

    $('body').on("click",".delete_checkbox_apar", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all_apar", function(){

        var checkbox = $('.delete_checkbox_apar:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataApar",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Sukses!',
                  'Data berhasil dihapus',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });    

});
</script>
<!-- End Apart -->

<!-- perangkat elektronik -->
<script>
$(document).ready(function(){

    $('body').on("click",".delete_checkbox_elektronik", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all_elektronik", function(){

        var checkbox = $('.delete_checkbox_elektronik:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataElektronik",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Sukses!',
                  'Data berhasil dihapus',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });    

});
</script>
<!-- End perangkat elektronik -->

<!-- Maintenance Ac -->
    <script>
    $(document).ready(function(){

        load_data();

        function load_data(query)
        {
            $.ajax({
                url:"<?php echo base_url();?>master/search_maint",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('#result2').html(data);
                }
            })
        }

        $('#search_maint').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });

        $('body').on("click",".delete_checkbox_maint", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all_maint", function(){

        var checkbox = $('.delete_checkbox_maint:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
               $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataMaintAc",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Sukses!',
                  'Data berhasil dihapus',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });

    });
</script>
<!-- End Maintenance Ac -->

<!-- CCTV -->
<script>
$(document).ready(function(){

    $('body').on("click",".delete_checkbox_cctv", function(){
        if($(this).is(':checked'))
        {
            $(this).closest('tr').addClass('removeRow');
        }
        else
        {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('body').on("click","#delete_all_cctv", function(){

        var checkbox = $('.delete_checkbox_cctv:checked');

        if(checkbox.length > 0)
        {
            var checkbox_value = [];
            $(checkbox).each(function(){
                checkbox_value.push($(this).val());
            });
            Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                $.ajax({
                url:"<?php echo base_url(); ?>master/deleteAllDataCctv",
                method:"POST",
                data:{checkbox_value:checkbox_value},
                success:function()
                {
                    $('.removeRow').fadeOut(1500);
                }
            })
                Swal.fire(
                  'Sukses!',
                  'Data berhasil dihapus',
                  'success'
                )
            }
        })
            
        }
        else
        {            
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Pilih setidaknya satu data !'  
            })
        }

    });    

});
</script>
<!-- End CCTV -->

<script>
    var flerr = $('.flash-err').data('eros');

if (flerr) {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: flerr,
        showConfirmButton: false,
        timer: 3000
    })
}
</script>

<!-- fungsi logout otomatis -->
<script>    
    let log_off = new Date();
    log_off.setMinutes(log_off.getMinutes() + 20)
    log_off = new Date(log_off)

    let int_logoff = setInterval(function(){
        let now = new Date();
        if(now > log_off){
            window.location.assign("<?=base_url()?>Auth/logout");
            clearInterval(int_logoff);
        }
    }, 2000);

    $('body').on('click', function(){
       log_off = new Date();
       log_off.setMinutes(log_off.getMinutes() + 20)
       log_off = new Date(log_off)
    })


</script>

<!-- Crips Live Chat -->
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="26974eff-46fb-4c48-8d88-82ce423bfffb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
</script>



 </body>

 </html>