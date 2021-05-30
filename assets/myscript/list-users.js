$(document).on('click', '#delUsers', function (e) {
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


 $(document).on("click", "#userUpdate", function(event) {       
    const id = $(this).data('id');
    const role = $(this).data('role');     
    const active = $(this).data('active');
    $("#formUpdateUser #id").val(id);
    $("#formUpdateUser #role").val(role);    
    $("#formUpdateUser #is_active").val(active); 
    
    
   
});