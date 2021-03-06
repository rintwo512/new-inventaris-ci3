
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/auth_assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/authstyle.css">
  
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 mt-3">
    <div class="container">
      <div class="flash-success" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-error" data-error="<?= $this->session->flashdata('error_message'); ?>"></div>
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?=base_url('assets');?>/img/regis-img.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?=base_url('assets');?>/img/logo-form.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form data-toggle="validator" action="<?=base_url('auth/postLogin');?>" method="post">
                  <div class="form-group">                    
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" required autofocus onkeypress="return event.charCode >= 48 && event.charCode <=57" autocomplete="off">
                    <?= form_error('nik', '<small class="c_alert pl-2 text-danger" id="log_alert_email">', '</small>'); ?>
                  </div>
                  <div class="form-group mb-4">                    
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <?= form_error('password', '<small class="c_alert pl-2 text-danger" id="log_alert_password">', '</small>'); ?>
                  </div>
                  <button class="btn btn-block login-btn mb-4" type="submit">Sign In</button>
                </form>                
                <p class="login-card-footer-text">Don't have an account? <a href="" id="login" class="text-reset">Register here</a></p>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </main>
  <script src="<?=base_url('assets');?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
  <script src="<?=base_url('assets');?>/myscript/success.js"></script>
  <script src="<?=base_url('assets');?>/myscript/error.js"></script>
  <script src="<?=base_url('assets');?>/vendors/plugins/Bootstrap-validator/validator.js"></script>
<script>
  window.setTimeout(function() {      
    $(".c_alert").slideUp(500, function() {
        $(this).remove();
    });
}, 5000);  
</script>
<script>
  $(document).ready(function(){
    $(document).on("click","#login", function(e){
          e.preventDefault();
          Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Silahkan hubungi admin untuk melakukan registrasi!'         
        })
      });
});
</script>
</body>
</html>
