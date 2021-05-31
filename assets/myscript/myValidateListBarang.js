$(document).ready(function () {
	$("#status").on("change", function () {
		var status = $("#status option:selected").val();

		if (status == "rusak" || status == "hilang") {
			document.getElementById("note").innerHTML =
				'<label for="catatan">Catatan</label><textarea class="form-control name="catatan" id="catatan" rows="3" placeholder="Please fill in" required></textarea>';
		} else {
			document.getElementById("note").innerHTML = "";
		}
	});
});
