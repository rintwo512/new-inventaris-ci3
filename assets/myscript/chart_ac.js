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
          title: 'Yakin ingin melanjutkan?',
          text: "Data ini tidak dapat di kembalikan!",
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

// $(document).ready(function(){
//   $("#chart_tahun").on("change", function(){
//   var tahun = $('#chart_tahun option:selected').val();
//   if(tahun === "2021"){
//  $('#chart_bulan option[value="Januari"]').attr("disabled", true);
//   }else{
//     $('#chart_bulan option[value="Januari"]').removeAttr("disabled", true);
//   }
// });
// });