$(document).on('click', '#delUsers', function (e) {
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


 $(document).on("click", "#userUpdate", function(event) {       
    const id = $(this).data('id');
    const role = $(this).data('role');     
    const active = $(this).data('active');
    $("#formUpdateUser #id").val(id);
    $("#formUpdateUser #is_role").val(role);    
    $("#formUpdateUser #is_active").val(active); 
    
    
   
});