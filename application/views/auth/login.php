
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
<title>Login Page</title>
<link rel="stylesheet" href="<?=base_url('assets');?>/new_auth/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link rel="stylesheet" href="<?=base_url('assets');?>/new_auth/css/styles.css" />
<link rel="stylesheet" href="<?=base_url('assets');?>/new_auth/css/color-switcher.min.css" />
<link rel="stylesheet" href="<?=base_url('assets');?>/new_auth/css/preloader.min.css" />

<style>
    #log_alert_email, #log_alert_password{                
        display:none;         
    }
</style>

</head>
<body>

<div id="preloader-wrapper">
<div id="loading-layer">
<div class="loading">
<div class="rect-one"></div>
<div class="rect-two"></div>
<div class="rect-three"></div>
<div class="rect-four"></div>
<div class="rect-five"></div>
</div>
</div>
</div>


<div id="color-switcher" class="shadow text-center">
<h5>Color Switcher</h5>
<hr>
<ul class="color-scheme">
<li class="c_f44336" data-color="#f44336"></li>
<li class="c_e91e63" data-color="#e91e63"></li>
<li class="c_ea4c89" data-color="#ea4c89"></li>
<li class="c_9c27b0" data-color="#9c27b0"></li>
<li class="c_673ab7" data-color="#673ab7"></li>
<li class="c_3f51b5" data-color="#3f51b5"></li>
<li class="c_5173b8" data-color="#5173b8"></li>
<li class="c_5e72e4" data-color="#5e72e4"></li>
<li class="c_2196f3" data-color="#2196f3"></li>
<li class="c_03a9f4" data-color="#03a9f4"></li>
<li class="c_00bcd4" data-color="#00bcd4"></li>
<li class="c_009688" data-color="#009688"></li>
<li class="c_4caf50" data-color="#4caf50"></li>
<li class="c_8bc34a" data-color="#8bc34a"></li>
<li class="c_ffc107" data-color="#ffc107"></li>
<li class="c_ff9800" data-color="#ff9800"></li>
<li class="c_795548" data-color="#795548"></li>
<li class="c_9e9e9e" data-color="#9e9e9e"></li>
<li class="c_607d8b" data-color="#607d8b"></li>
<li class="c_333645" data-color="#333645"></li>
</ul>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">Rounded</span>
</div>
<input type="text" id="rounded-demo" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="5" class="form-control" placeholder="Rounded">
<div class="input-group-append">
<span class="input-group-text">px</span>
</div>
</div>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">Shadow</span>
</div>
<select id="shadow-demo" class="form-control">
<option value="off" selected>Off</option>
<option value="on">On</option>
</select>
</div>
<button class="btn switcher-toggle" title="Color Switcher">
<i class="fas fa-cog fa-spin"></i>
</button>
</div>


<div class="d-flex flex-column justify-content-center swish-wrapper text-center" id="auth-page">
<div class="container-fluid form-container login rounded">
<div class="row flex-row-reverse">

<div class="col-md-6 overlay-box shadow">
<div class="overlay-background rounded my-auto"></div>
<div class="overlay-content mx-auto">
<div class="row no-gutters my-auto">
<div class="col logo py-4 mx-auto">
<!-- <a class="logo-link" href="<?= base_url('auth');?>"><img class="logo-image" alt="Logo" src="<?= base_url('assets');?>/img/yt.png" /></a> -->
</div>
</div>
<div class="row no-gutters my-auto">
<div class="col message-box px-3 mx-auto">
<h2 class="text-white mb-4">Daeng Coding</h2>
<p class="mb-4 p-text title" data-period="1000"><span class="title_run" data-period="3000" data-type='["“Musuh terbesar dari pengetahuan bukanlah ketidakpedulian, tetapi ilusi mengenai pengetahuan.”"]'></span></p>
<a class="btn bg-white text-neutral btn-lg shadow-lg mb-4 box-rounded" href="<?= base_url('/');?>">Homepage</a>
</div>
</div>
</div>
</div>


<div class="col-md-6 form-box bg-white rounded shadow my-auto">
<div class="d-flex flex-column sign-in-container h-100">
<div class="align-items-center sign-in mx-auto my-auto px-4 py-5">

<form data-toggle="validator" class="sign-in-form h-100" action="<?=base_url('auth/postLogin');?>" method="post">
<!-- <h3 class="text-header text-decoration-underline">Login Please</h3> -->

<div id="social-container" class="text-center py-0">

<div class="flash-success" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
      <div class="flash-error" data-error="<?= $this->session->flashdata('error_message'); ?>"></div>
<img src="<?= base_url('assets');?>/img/logo-form.png" alt="">
</div>

<span class="text-main mb-2">Login Please</span>

<div class="form-group mb-3 mt-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text box-rounded-left"><i class="fas fa-envelope"></i></span>
</div>
<input class="form-control form-control-lg box-rounded-right" id="nik" name="nik" type="text" placeholder="N I K" autofocus onkeypress="return event.charCode >= 48 && event.charCode <=57" autocomplete="off"/>
<?= form_error('nik', '<small class="c_alert pl-2 text-danger" id="log_alert_email">', '</small>'); ?>
<div class="input-group-append"></div>
</div>
</div>
<div class="form-group mb-3 mt-4">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text box-rounded-left"><i class="fas fa-lock"></i></span>
</div>
<input class="form-control form-control-lg box-rounded-right" type="password" placeholder="Password" name="password" id="password" />
<?= form_error('password', '<small class="c_alert pl-2 text-danger" id="log_alert_password">', '</small>'); ?>
<div class="input-group-append"></div>
</div>
</div>


<div class="form-row text-nowrap d-flex my-4">
<div class="col d-flex align-items-center">
<div class="form-check">

</div>
</div>
<div class="col d-flex justify-content-end align-items-center"><a class="text-neutral forgot-password-text" href="#" id="login">Forgot your password?</a></div>
</div>

<button class="btn btn-main shadow-sm btn-block box-rounded" type="submit">Sign in</button>
</form>

</div>
</div>
</div>

</div>
</div>
</div>

<script src="<?=base_url('assets');?>/new_auth/js/jquery.min.js"></script>
<script src="<?=base_url('assets');?>/new_auth/js/bootstrap.min.js"></script>
<script src="<?=base_url('assets');?>/new_auth/js/color-switcher.min.js"></script>
<script src="<?=base_url('assets');?>/new_auth/js/preloader.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
  <script src="<?=base_url('assets');?>/myscript/success.js"></script>
  <script src="<?=base_url('assets');?>/myscript/error.js"></script>
  <script src="<?=base_url('assets');?>/vendors/plugins/Bootstrap-validator/validator.js"></script>

<script>
    const email = document.querySelector('#log_alert_email').textContent;
    console.log(email);       
         
    if(email){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: `${email}`         
        });
    }

    
</script>
<script>
     const password = document.querySelector('#log_alert_password').textContent;       
    console.log(password); 
if(password){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: `${password}`         
        });
    }
</script>

<script>
  $(document).ready(function(){
    $(document).on("click","#login", function(e){
          e.preventDefault();
          Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Silahkan hubungi admin!'         
        })
      });
});
</script>

<script>
    var textType = function(el, runText, periode) {
        this.runText = runText;
        this.el = el;
        this.loopNum = 0;
        this.periode = parseInt(periode, 10) || 1000;
        this.txt = ' ';
        this.tick();
        this.isDeleting = false;
    };
    textType.prototype.tick = function() {
        var i = this.loopNum % this.runText.length;
        var fullText = this.runText[i];
        if (this.isDeleting) {
            this.txt = fullText.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullText.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="rtx">' + this.txt + '</span>';
        var that = this;
        var dell = 10 - Math.random() + 50;
        if (this.isDeleting) {
            dell /= 1;
        }
        if (!this.isDeleting && this.txt === fullText) {
            dell = this.periode;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            dell = 500;
        }
        setTimeout(function() {
            that.tick();
        }, dell);
    };
    window.onload = function() {
        var elements = document.getElementsByClassName('title_run');
        for (var i = 0; i < elements.length; i++) {
            var runText = elements[i].getAttribute('data-type');
            var periode = elements[i].getAttribute('data-period');
            if (runText) {
                new textType(elements[i], JSON.parse(runText), periode);
            }
        }

        var css = document.createElement('style');
        css.type = "text/css";
        css.innerHTML =
            ".title_run > .rtx {border-right: 0.05em solid #fff;}";
        document.body.appendChild(css);
    };
    </script>
</body>
</html>
