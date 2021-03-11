const flasherror = $('.flash-error').data('error');

if (flasherror) {
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: flasherror  
})

}