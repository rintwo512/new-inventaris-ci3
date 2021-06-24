
  $('#sayap').on('change', function () {
    var wing = $('#sayap option:selected').val();
    
    if (wing == "W-A" || wing == "W-B") {

      document.getElementById('flor').innerHTML= '<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" id="lantai" name="lantai" type="text" placeholder="Please fill in"required=""><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option><option value="Lt3">Lt3</option></select>';
            
    } else if(wing == "W-C" || wing == "W-D") {
      
          document.getElementById('flor').innerHTML= '<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" id="lantai" name="lantai" type="text" placeholder="Please fill in"required=""><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option></select>';
      
    }else if(wing == ""){

            document.getElementById('flor').innerHTML = '<label for="lantai" class="mb-0" style="font-size:13px">Lantai <em class="text-danger">*</em></label> <select class="form-control" name="lantai" id="lantai" type="text" placeholder="Please fill in" required=""><option value="">--Select--</option></select>';
     }else {

        document.getElementById('flor').innerHTML= '<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" id="lantai" name="lantai" type="text" placeholder="Please fill in" required=""><option value="Lt1">Lt1</option></select>';

    }
  });

  $('#modalStore').on('change', function () {
    var status = $('#status option:selected').val();
    
    if (status == "Normal") {
      document.getElementById('catatan').value = "";
      $('#catatan').attr('disabled', true);
      $('#catatan').removeAttr('placeholder', true);      
      
    } else {
      $('#catatan').attr('required', true);
      $('#catatan').removeAttr('disabled', false);
      $('#catatan').attr('placeholder', 'Please fill in');
      
      
    }   
  });



$(document).on("click", "#detailApart", function(event) {
    
    const expired = $(this).data('expired');
    const pengadaan = $(this).data('pengadaan');
    const catatan = $(this).data('catatan');
    const updated_by = $(this).data('updated_by');
    const created_by = $(this).data('created_by');
        
    
    $("#modal-apart #tanggal_expired").text(expired);
    $("#modal-apart #tanggal_pengadaan").text(pengadaan);
    $("#modal-apart #catatan").text(catatan);
    $("#modal-apart #updated_by").text(updated_by);
    $("#modal-apart #created_by").text(created_by);    
   
});

$(document).on('click', '#deleteDataApart', function (e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya, Hapus itu!'
        }).then((result) => {
           if (result.value) {
                document.location.href = href;
                Swal.fire(
                  'Dihapus!',
                  'Data berhasil dihapus.',
                  'success'
                )
            }
        })
    });


$(document).on("click", "#updateApart", function(event) {
    
    const id = $(this).data('id');
    const no_apart = $(this).data('no_apart');
    const wing = $(this).data('wing');
    const lantai = $(this).data('lantai');
    const lokasi = $(this).data('lokasi');
    const merk = $(this).data('merk');
    const jenis = $(this).data('jenis');
    const berat = $(this).data('berat');
    const expired = $(this).data('expired');
    const pengadaan = $(this).data('pengadaan');
    const status = $(this).data('status');
    const catatan = $(this).data('catatan');    
    
    $("#update-modal-body #id").val(id);
    $("#update-modal-body #no_apart").val(no_apart);
    $("#update-modal-body #wing").val(wing);
    $("#update-modal-body #lantai").val(lantai);
    $("#update-modal-body #lokasi").val(lokasi);
    $("#update-modal-body #merk").val(merk);    
    $("#update-modal-body #jenis").val(jenis);    
    $("#update-modal-body #berat").val(berat);    
    $("#update-modal-body #tgl_expired").val(expired);    
    $("#update-modal-body #tgl_pengadaan").val(pengadaan);    
    $("#update-modal-body #status").val(status);    
    $("#update-modal-body #catatan_update").val(catatan);    
   
});