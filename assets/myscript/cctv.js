  $(document).ready(function () {

    $("#wing_cctv").on("change", function(){

      var wing = $("#wing_cctv").val();

      if(wing == "W-A" || wing == "W-B"){
        document.getElementById("lantai_cctv").innerHTML='<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai" id="lantai" type="text"><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option><option value="Lt3">Lt3</option></select>';
      }else if(wing == "W-C" || wing == "W-D"){
        document.getElementById("lantai_cctv").innerHTML='<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai" id="lantai" type="text"><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option></select><div class="invalid-feedback">The field is required</div>';
      }else{
        document.getElementById("lantai_cctv").innerHTML='<label for="lantai" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai" id="lantai" type="text"><option value="Lt1">Lt1</option></select>';
      }
    })



  $("#status_cctv").on("change", function () {
    var status = $("#status_cctv").val();

    if (status == "Rusak") {
      document.getElementById("catatan_cctv").innerHTML =
        '<label for="catatan" class="mb-0">Catatan <em class="text-danger">*</em></label><textarea class="form-control" name="catatan" id="catatan_cctv" rows="3" placeholder="Please fill in" required></textarea>';
    } else {
      document.getElementById("catatan_cctv").innerHTML = "";
    }
  });

  $(document).on("click","#btnDetailCctv", function(){
    const power = $(this).data('power_cctv');
    const sensor = $(this).data('sensor_cctv');
    const pengadaan = $(this).data('pengadaan_cctv');
    const catatan = $(this).data('catatan_cctv');
    const created = $(this).data('created_cctv');
    const updated = $(this).data('updated_cctv');

    $("#modal-cctv #power_detail").text(power);
    $("#modal-cctv #sensor_detail").text(sensor);
    $("#modal-cctv #pengadaan_detail").text(pengadaan);
    $("#modal-cctv #catatan_detail").text(catatan);
    $("#modal-cctv #created_detail").text(created);
    $("#modal-cctv #updated_detail").text(updated);
  });

  $(document).on("click","#btnUpdateCctv", function(){
    const id = $(this).data('id_cam');
    const noCam = $(this).data('no_cam');
    const wingCam = $(this).data('wing_cam');
    const lantaiCam = $(this).data('lantai_cam');
    const lokasiCam = $(this).data('lokasi_cam');
    const merkCam = $(this).data('merk_cam');
    const jenisCam = $(this).data('jenis_cam');
    const powerCam = $(this).data('power_cam');
    const sensorCam = $(this).data('sensor_cam');
    const statusCam = $(this).data('status_cam');
    const pengadaanCam = $(this).data('pengadaan_cam');
    const catatanCam = $(this).data('catatan_cam');
    

    $("#modal-body-update-cctv #id_update").val(id);
    $("#modal-body-update-cctv #no_camera_update").val(noCam);
    $("#modal-body-update-cctv #wing_update").val(wingCam);
    $("#modal-body-update-cctv #lantai_update").val(lantaiCam);
    $("#modal-body-update-cctv #lokasi_update").val(lokasiCam);
    $("#modal-body-update-cctv #merk_update").val(merkCam);
    $("#modal-body-update-cctv #jenis_update").val(jenisCam);
    $("#modal-body-update-cctv #power_update").val(powerCam);
    $("#modal-body-update-cctv #sensor_update").val(sensorCam);
    $("#modal-body-update-cctv #pengadaan_update").val(pengadaanCam);
    $("#modal-body-update-cctv #status_update_cctv").val(statusCam);
    $("#modal-body-update-cctv #catatan_update_cctv").val(catatanCam);
   
  });

  $("#status_update_cctv").on("change", function () {
    var status = $("#status_update_cctv option:selected").val();
    if (status == "Normal") {
      document.getElementById("catatan_update_cctv").value = "";
      $("#catatan_update_cctv").attr('disabled', true);
      $("#catatan_update_cctv").removeAttr('placeholder');      
      
    } else {
      $("#catatan_update_cctv").attr('required', true);
      $("#catatan_update_cctv").removeAttr('disabled', true);
      $("#catatan_update_cctv").attr('placeholder', 'Please fill in');
      
    }   
  });

  $(document).on('click', '#btnDeleteCctv', function (e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya, hapus itu!'
        }).then((result) => {
           if (result.value) {
                document.location.href = href;
                Swal.fire(
                  'Dihapus!',
                  'Data berhasil di hapus.',
                  'success'
                )
            }
        })
    });
});