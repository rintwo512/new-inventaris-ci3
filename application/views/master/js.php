 <!-- latest jquery-->
    <script src="<?=base_url('assets');?>/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?=base_url('assets');?>/js/bootstrap/popper.min.js"></script>
    <script src="<?=base_url('assets');?>/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="<?=base_url('assets');?>/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=base_url('assets');?>/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?=base_url('assets');?>/js/sidebar-menu.js"></script>
    <script src="<?=base_url('assets');?>/js/config.js"></script>
     <script src="<?=base_url('assets');?>/js/datepicker/daterange-picker/moment.min.js"></script>
    <script src="<?=base_url('assets');?>/js/datepicker/daterange-picker/daterangepicker.js"></script>
    <script src="<?=base_url('assets');?>/js/datepicker/daterange-picker/daterange-picker.custom.js"></script>   
    <!-- Plugins JS start-->    
    <script src="<?=base_url('assets');?>/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?=base_url('assets');?>/js/prism/prism.min.js"></script>
    <script src="<?=base_url('assets');?>/js/clipboard/clipboard.min.js"></script>
    <script src="<?=base_url('assets');?>/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?=base_url('assets');?>/js/counter/jquery.counterup.min.js"></script>
    <script src="<?=base_url('assets');?>/js/counter/counter-custom.js"></script>
    <script src="<?=base_url('assets');?>/js/custom-card/custom-card.js"></script>

    <script src="<?=base_url('assets');?>/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?=base_url('assets');?>/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?=base_url('assets');?>/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
     <script src="<?=base_url('assets');?>/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets');?>/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?=base_url('assets');?>/js/chat-menu.js"></script>
    <script src="<?=base_url('assets');?>/js/general-widget.js"></script>
    <script src="<?=base_url('assets');?>/js/height-equal.js"></script>
    <script src="<?=base_url('assets');?>/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?=base_url('assets');?>/js/script.js"></script>
    <script src="<?=base_url('assets');?>/js/theme-customizer/customizer.js"></script>
    <script src="<?=base_url('assets');?>/myscript/myValidate.js"></script>
    <script src="<?=base_url('assets');?>/myscript/success.js"></script>    
    <script src="<?=base_url('assets');?>/myscript/modal-update.js"></script>
    <!-- login js-->
    <!-- Plugin used-->



   <!--  <script>
      $(window).on('load',function(){
    $('#loadModal').modal('show');
});
    </script> -->


    <script>
$(document).on("click", "#btnDetail", function() {
    
    const pemasangan = $(this).data('pemasangan');
    const pembuat = $(this).data('pembuat');
    const maintenance = $(this).data('maintenance');    
    const refrigerant = $(this).data('refrigerant');
    const kapasitas = $(this).data('kapasitas');
    const kerusakan = $(this).data('kerusakan');
    const updated = $(this).data('update');
    
    $("#modal-body #tgl_pemasangan").text(pemasangan);
    $("#modal-body #negara_pembuat").text(pembuat);
    $("#modal-body #tgl_maintenance").text(maintenance);    
    $("#modal-body #refrigerant").text(refrigerant);
    $("#modal-body #kapasitas").text(kapasitas);
    $("#modal-body #jenis_kerusakan").text(kerusakan);
    $("#modal-body #updated_at").text(updated);
});



$(document).on('click', '#btnDel', function (e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
           if (result.value) {
                document.location.href = href;
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
            }
        })
    });


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

$(document).on('click', '#delUsers', function (e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
           if (result.value) {
                document.location.href = href;
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
            }
        })
    });

</script>

<script>
  


    $(document).on("click", "#userUpdate", function(event) {
   
    
    const id = $(this).data('id');
    const role = $(this).data('role');     
    const active = $(this).data('active');
    $("#formUpdateUser #id").val(id);
    $("#formUpdateUser #role").val(role);    
    $("#formUpdateUser #is_active").val(active); 
    
    
   
});

</script>


  </body>
</html>