$('#tegangan_kerja').on('change', function(){
  var tegangan_kerja = $('#tegangan_kerja option:selected').val();
  if(tegangan_kerja == 380){
         document.getElementById('phasa').value = "3 phasa";                                    
        $('#phasa').attr('readonly', true);
  }else if(tegangan_kerja == ""){      
          document.getElementById('phasa').value = "";  
         $('#phasa').removeAttr('readonly', true);
         $('#phasa').attr('placeholder', 'Please fill in');
  }else{
    document.getElementById('phasa').value = "1 phasa";                                    
        $('#phasa').attr('readonly', true);
  }

})

$(document).ready(function(){
  $('body').change(function () {
    var status = $('#statuss').val();
    if (status == "Normal") {
      document.getElementById('jenis_kerusakann').value = "";
      $('#jenis_kerusakann').attr('disabled', true);
      $('#jenis_kerusakann').removeAttr('placeholder', true);      
      document.getElementById('bint').innerHTML = "Catatan";
    } else {
      $('#jenis_kerusakann').attr('required', true);
      $('#jenis_kerusakann').removeAttr('disabled', false);
      $('#jenis_kerusakann').attr('placeholder', 'Please fill in');
      document.getElementById('bint').innerHTML = "Catatan";
    }   
  });
});


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



 $(document).ready(function(){

 // validasi field wing dan lantai
    $('#wing').on('change', function(){

        var wing = $('#wing option:selected').val();
        if(wing == "W-A" || wing == "W-B"){

            document.getElementById('inputLantai').innerHTML = '<label for="lantai" class="mb-0" style="font-size:13px">Lantai <em class="text-danger">*</em></label> <select class="form-control" name="lantai" id="lantai" type="text" placeholder="Please fill in" required=""><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option><option value="Lt3">Lt3</option></select>';

        }else if(wing == "W-C" || wing == "W-D"){

            document.getElementById('inputLantai').innerHTML = '<label for="lantai" class="mb-0" style="font-size:13px">Lantai <em class="text-danger">*</em></label> <select class="form-control" name="lantai" id="lantai" type="text" placeholder="Please fill in" required=""><option value="Lt1">Lt1</option><option value="Lt2">Lt2</option></select>';

        }else if(wing == ""){

            document.getElementById('inputLantai').innerHTML = '<label for="lantai" class="mb-0" style="font-size:13px">Lantai <em class="text-danger">*</em></label> <select class="form-control" name="lantai" id="lantai" type="text" placeholder="Please fill in" required=""><option value="">--Select--</option></select>';

        }else{
            document.getElementById('inputLantai').innerHTML = '<label for="lantai" class="mb-0" style="font-size:13px">Lokasi <em class="text-danger">*</em></label><input type"text" name="lantai" id="lantai" class="form-control" placeholder="Please fill in" required>';            
        }

    })


    // validasi field model dan kapasitas
    $('#model').on('change', function(){

      var model = $('#model option:selected').val();

      if(model == "Splite"){

          document.getElementById('inputKapasitas').innerHTML = '<label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas <em class="text-danger">*</em></label> <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required=""><option value="1pk">1pk</option><option value="1,5pk">1,5pk</option><option value="2pk">2pk</option><option value="2,5pk">2,5pk</option></select>';           
                          
      }else if(model == "Cassette"){

          document.getElementById('inputKapasitas').innerHTML = '<label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas <em class="text-danger">*</em></label> <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required=""><option value="2pk">2pk</option><option value="2,5pk">2,5pk</option><option value="3pk">3pk</option><option value="5pk">5pk</option></select>';

      }else if(model == "Standing floor"){

          document.getElementById('inputKapasitas').innerHTML = '<label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas <em class="text-danger">*</em></label> <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required=""><option value="3pk">3pk</option><option value="5pk">5pk</option></select>';

      }else if(model == "Sentral"){

          document.getElementById('inputKapasitas').innerHTML = '<label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas <em class="text-danger">*</em></label> <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required=""><option value="8pk">8pk</option><option value="10pk">10pk</option></select>';

      }else{
        document.getElementById('inputKapasitas').innerHTML = '<label for="kapasitas" class="mb-0" style="font-size:13px">Kapasitas <em class="text-danger">*</em></label> <select class="form-control" name="kapasitas" id="kapasitas" type="text" placeholder="Please fill in" required=""><option value="">--Select</option></select>';
      }

    })


    // validasi field jenis dan type refrigrant
    $('#jenis').on('change', function(){

      var  jenis = $('#jenis option:selected').val();

      if(jenis == "Inverter"){

        document.getElementById('inputRefrigerant').innerHTML ='<label for="refrigerant" class="mb-0" style="font-size:13px">Type refrigerant <em class="text-danger">*</em></label> <select class="form-control" name="refrigerant" id="refrigerant" type="text" placeholder="Please fill in" required=""><option value="R410">R410</option><option value="R32">R32</option></select>';

      }else if(jenis == "Standar"){

        document.getElementById('inputRefrigerant').innerHTML ='<label for="refrigerant" class="mb-0" style="font-size:13px">Type refrigerant <em class="text-danger">*</em></label> <select class="form-control" name="refrigerant" id="refrigerant" type="text" placeholder="Please fill in" required=""><option value="R22">R22</option><option value="R410">R410</option><option value="R32">R32</option></select>';

      }else{
         document.getElementById('inputRefrigerant').innerHTML ='<label for="refrigerant" class="mb-0" style="font-size:13px">Type refrigerant <em class="text-danger">*</em></label> <select class="form-control" name="refrigerant" id="refrigerant" type="text" placeholder="Please fill in" required=""><option value="">--Select--</option></select>';
      }

    })


 });
  