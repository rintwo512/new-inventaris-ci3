$(document).ready(function(){
  $("#status_update").on("change", function () {
    var status = $("#status_update option:selected").val();
    if (status == "normal") {
      document.getElementById("catatan_update").value = "";
      $("#catatan_update").attr('disabled', true);
      $("#catatan_update").removeAttr('placeholder');      
      
    } else {
      $("#catatan_update").attr('required', true);
      $("#catatan_update").removeAttr('disabled', true);
      $("#catatan_update").attr('placeholder', 'Please fill in');
      
    }   
  });
});

$(document).ready(function () {
	$("#status").on("change", function () {
		var status = $("#status option:selected").val();

		if (status == "rusak" || status == "hilang") {
			document.getElementById("note").innerHTML =
				'<label for="catatan">Catatan</label><textarea class="form-control" name="catatan" id="catatan" rows="3" placeholder="Please fill in" required></textarea>';
		} else {
			document.getElementById("note").innerHTML = "";
		}
	});	
});



