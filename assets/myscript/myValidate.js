 $(document).ready(function(){
  $('body').change(function () {
    var status = $('#status').val();
    
    if (status == "Normal") {
      document.getElementById('jenis_kerusakan').value = "";
      $('#jenis_kerusakan').attr('disabled', true);
      $('#jenis_kerusakan').removeAttr('placeholder', true);      
      
    } else {
      $('#jenis_kerusakan').attr('required', true);
      $('#jenis_kerusakan').removeAttr('disabled', false);
      $('#jenis_kerusakan').attr('placeholder', 'Please fill in');
      
      
    }   
  });
});
  