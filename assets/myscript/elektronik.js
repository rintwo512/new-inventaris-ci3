$(document).ready(function(){
	$('#wing_el').on('change', function(){
		var wing = $(this).val();

		if(wing == "W-A" || wing == "W-B"){
			document.getElementById("lt_el").innerHTML = '<label for="lantai_el" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai_el" id="lantai_el" type="text" required><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option><option value="Lt3">Lt3</option></select>';
		} else if(wing == "W-C" || wing == "W-D"){
			document.getElementById("lt_el").innerHTML = '<label for="lantai_el" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai_el" id="lantai_el" type="text" required><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option></select>';
		} else if(wing == "Lainnya"){
			document.getElementById("lt_el").innerHTML = '<label for="lantai_el" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai_el" id="lantai_el" type="text" required><option value="Lt1">Lt1</option></select>';
		} else{
			document.getElementById("lt_el").innerHTML = '<label for="lantai_el" class="mb-0">Lantai <em class="text-danger">*</em></label><select class="form-control" name="lantai_el" id="lantai_el" type="text" required><option value="">--Select--</option></select>';
		}
	});

	$(document).on("click", "#btnUpdateEl", function(){
		const id_el = $(this).data('id_el1'); 
		const aset_el = $(this).data('aset_el1');
		const nama_el = $(this).data('nama_el1');
		const merk_el = $(this).data('merk_el1');
		const wing_el = $(this).data('wing_el1');
		const lantai_el = $(this).data('lantai_el1');
		const lokasi_el = $(this).data('lokasi_el1');
		const tegangan_el = $(this).data('tegangan_el1');
		const watt_el = $(this).data('watt_el1');
		const catatan_el = $(this).data('catatan_el1');

		$("#modal-body-el #id_el3").val(id_el);
		$("#modal-body-el #aset_el3").val(aset_el);
		$("#modal-body-el #nama_el3").val(nama_el);
		$("#modal-body-el #merk_el3").val(merk_el);
		$("#modal-body-el #wing_el3").val(wing_el);
		$("#modal-body-el #lantai_el3").val(lantai_el);
		$("#modal-body-el #lokasi_el3").val(lokasi_el);
		$("#modal-body-el #tegangan_el3").val(tegangan_el);
		$("#modal-body-el #amper_el3").val(watt_el);
		$("#modal-body-el #catatan_el3").val(catatan_el);
	});


	$(document).on("click","#btnDetailEl", function(){
		const tegangan_det = $(this).data('tegangan_el2');
		const watt_det = $(this).data('watt_el2');
		const catatan_det = $(this).data('catatan_el2');
		const updated_det = $(this).data('updated_el2');
		const created_det = $(this).data('created_el2');

		$("#modal-body-detail #amper_el4").text(watt_det);
		$("#modal-body-detail #tegangan_el4").text(tegangan_det);
		$("#modal-body-detail #catatan_el4").text(catatan_det);
		$("#modal-body-detail #updated_el4").text(updated_det);
		$("#modal-body-detail #created_el4").text(created_det);
	});

	$(document).on('click', '#btnDeleteEl', function (e) {
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
});