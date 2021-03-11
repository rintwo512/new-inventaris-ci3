$(document).ready(function(){
  $('body').change(function () {
    var status = $('#statuss').val();
    if (status == "Normal") {
      document.getElementById('jenis_kerusakann').value = "";
      $('#jenis_kerusakann').attr('disabled', true);
      $('#jenis_kerusakann').removeAttr('placeholder', true);      
      document.getElementById('bint').innerHTML = "Jenis kerusakan";
    } else {
      $('#jenis_kerusakann').attr('required', true);
      $('#jenis_kerusakann').removeAttr('disabled', false);
      $('#jenis_kerusakann').attr('placeholder', 'Please fill in');
      document.getElementById('bint').innerHTML = "Jenis kerusakan *";
    }   
  });
});

$(document).on("click", "#btnUpdate", function(event) {
    
    const id = $(this).data('id');
    const wing = $(this).data('wing');   
    const lantai = $(this).data('lantai');   
    const ruangan = $(this).data('ruangan');   
    const merk = $(this).data('merk');   
    const type = $(this).data('type');   
    const jenis = $(this).data('jenis');   
    const tgl_pemasangann = $(this).data('tgl_pemasangan');   
    const refrigerant = $(this).data('refrigerant');   
    const kapasitas = $(this).data('kapasitas');   
    const negara_pembuat = $(this).data('negara_pembuat');   
    const tgl_maintenancee = $(this).data('tgl_maintenance');   
    const statuss = $(this).data('status');   
    const jenis_kerusakann = $(this).data('jenis_kerusakan');   
    
    $("#modal-update #id").val(id);
    $("#modal-update #wing").val(wing);    
    $("#modal-update #lantai").val(lantai);    
    $("#modal-update #ruangan").val(ruangan); 
    $("#modal-update #merk").val(merk); 
    $("#modal-update #type").val(type); 
    $("#modal-update #jenis").val(jenis); 
    $("#modal-update #tgl_pemasangann").val(tgl_pemasangann); 
    $("#modal-update #refrigerant").val(refrigerant); 
    $("#modal-update #kapasitas").val(kapasitas); 
    $("#modal-update #negara_pembuat").val(negara_pembuat); 
    $("#modal-update #tgl_maintenancee").val(tgl_maintenancee);
    $("#modal-update #statuss").val(statuss); 
    $("#modal-update #jenis_kerusakann").val(jenis_kerusakann); 
});




//DateRange Picker
(function($) {
    "use strict";
    $(function() {
        $('#tgl_maintenancee').daterangepicker();
    });
   
// Single Date Picker
    $(function() {
        $('#tgl_pemasangann').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            },
            function(start, end, label) {
                var years = moment().diff(start, 'years');               
            });
    });

    

})(jQuery);