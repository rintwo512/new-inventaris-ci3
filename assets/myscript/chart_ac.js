$(document).on("click", "#btnUpdateGrafik", function(event){

    const id = $(this).data('id');
    const tahun = $(this).data('tahun');
    const bulan = $(this).data('bulan');
    const unit = $(this).data('unit');

    $("#modal-body-grafik #id").val(id);
    $("#modal-body-grafik #tahun").val(tahun);
    $("#modal-body-grafik #bulan").val(bulan);
    $("#modal-body-grafik #unit").val(unit);

})

$(document).on('click', '#btnDeleteDataGrafik', function (e) {
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