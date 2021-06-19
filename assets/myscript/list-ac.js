


$(document).on("click", "#btnUpdate", function(event) {
    
    const id = $(this).data('id');
    const label = $(this).data('label1');   
    const wing = $(this).data('wing');   
    const lantai = $(this).data('lantai');   
    const ruangan = $(this).data('ruangan');   
    const merk = $(this).data('merk');   
    const model = $(this).data('model');   
    const jenis = $(this).data('jenis');   
    const tgl_pemasangann = $(this).data('tgl_pemasangan');   
    const refrigerant = $(this).data('refrigerant');   
    const kapasitas = $(this).data('kapasitas');   
    const product = $(this).data('product');         
    const arus = $(this).data('arus1');   
    var phasa = $(this).data('phasa');
    const tgl_maint = $(this).data('tgl_maint');
    const petugas = $(this).data('petugas');    
    const pipa = $(this).data('pipa');   
    const btu = $(this).data('btu');   
    const tegangan = $(this).data('tegangan1');   
    const statuss = $(this).data('status');   
    const jenis_kerusakann = $(this).data('jenis_kerusakan');   
    const status_kompresor = $(this).data('status_kompresor');   
    
    $("#modal-update #id").val(id);
    $("#modal-update #label").val(label);    
    $("#modal-update #wing").val(wing);    
    $("#modal-update #lantai").val(lantai);    
    $("#modal-update #ruangan").val(ruangan); 
    $("#modal-update #merk").val(merk); 
    $("#modal-update #model").val(model); 
    $("#modal-update #jenis").val(jenis); 
    $("#modal-update #tgl_pemasangann").val(tgl_pemasangann); 
    $("#modal-update #refrigerant").val(refrigerant); 
    $("#modal-update #kapasitas").val(kapasitas); 
    $("#modal-update #product").val(product);     
    $("#modal-update #arus").val(arus); 
    $("#modal-update #phasa").val(phasa); 
    $("#modal-update #pipa").val(pipa); 
    $("#modal-update #btu2").val(btu);
    $("#modal-update #tgl_maintenancee").val(tgl_maint);
    $("#modal-update #petugas").val(petugas); 
    $("#modal-update #tegangan_kerja").val(tegangan); 
    $("#modal-update #statuss").val(statuss); 
    $("#modal-update #jenis_kerusakann").val(jenis_kerusakann);
    $("#modal-update #status_kompresor").val(status_kompresor);
});



$(document).on("click", "#btnDetail", function() {
    
    const pemasangan = $(this).data('pemasangan');
    const btu = $(this).data('btu');
    const pipa = $(this).data('pipa');
    const arus = $(this).data('arus');
    const phasa = $(this).data('phasa');
    const tegangan = $(this).data('tegangan');
    const product = $(this).data('product');
    const maintenance = $(this).data('maintenance');    
    const petugas = $(this).data('petugass');    
    const refrigerant = $(this).data('refrigerant');
    const kapasitas = $(this).data('kapasitas');
    const kerusakan = $(this).data('kerusakan');
    const kompresor = $(this).data('kompresor');
    const insert = $(this).data('insert');
    const updated = $(this).data('update');
    
    $("#modal-body #pipa").text(pipa);
    $("#modal-body #btu").text(btu);
    $("#modal-body #arus").text(arus);
    $("#modal-body #phasa").text(phasa);
    $("#modal-body #tegangan_kerja").text(tegangan);
    $("#modal-body #tgl_pemasangan").text(pemasangan);
    $("#modal-body #product").text(product);
    $("#modal-body #tgl_maintenance").text(maintenance);    
    $("#modal-body #refrigerant").text(refrigerant);
    $("#modal-body #kapasitas").text(kapasitas);
    $("#modal-body #petugas").text(petugas);
    $("#modal-body #jenis_kerusakan").text(kerusakan);
    $("#modal-body #status_kompresor").text(kompresor);
    $("#modal-body #insert_at").text(insert);
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



 