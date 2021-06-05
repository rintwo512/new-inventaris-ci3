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


 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
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
 
 <!-- login js-->
 <!-- Plugin used-->



 <!--  <script>
      $(window).on('load',function(){
    $('#loadModal').modal('show');
});
    </script> -->


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
 <script>
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
    })
</script>


<script>
    $(document).ready(function() {
        $('#alertPassword').on('click', function() {
            $('#alertPassword').hide(2000);
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



 </body>

 </html>