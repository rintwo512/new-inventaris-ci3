
	$(document).on("click", "#detailBarang", function(event) {
    
    const daya = $(this).data('daya');
    const berat = $(this).data('berat');
    const catatan = $(this).data('catatan');
    const updated = $(this).data('updated');       
    
    $("#modal-barang #daya").text(daya);
    $("#modal-barang #berat").text(berat);
    $("#modal-barang #catatan").text(catatan);
    $("#modal-barang #updated").text(updated);    
   
});


$(document).on("click", "#updateBarang", function(event) {
    
    const id = $(this).data('id');
    const nama = $(this).data('nama');   
    const daya = $(this).data('daya');   
    const berat = $(this).data('berat');   
    const catatan = $(this).data('catatan');   
    const merk = $(this).data('merk');   
    const pengadaan = $(this).data('pengadaan');   
    const status = $(this).data('status');   
    
    $("#update-modal-body #id").val(id);
    $("#update-modal-body #nama_barang").val(nama);    
    $("#update-modal-body #merk").val(merk);    
    $("#update-modal-body #tgl_pengadaan").val(pengadaan);    
    $("#update-modal-body #status").val(status); 
    $("#update-modal-body #daya").val(daya);    
    $("#update-modal-body #berat").val(berat);    
    $("#update-modal-body #catatan").val(catatan);    
});



$(document).on('click', '#delBarang', function (e) {
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