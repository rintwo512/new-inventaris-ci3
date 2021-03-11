const flashdata = $('.flash-success').data('flashdata');

if (flashdata) {
	Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: flashdata,
  showConfirmButton: false,
  timer: 3000
})
}
 