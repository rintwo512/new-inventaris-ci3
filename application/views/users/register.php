
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration page</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="<?=base_url('assets');?>/css/authstyle.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">             
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" data-toggle="validator" action="<?=base_url('users/postRegister');?>" method="post">
              <div class="form-label-group form-group">
                <input type="text" id="name" name="name" value="<?=set_value('name');?>" class="form-control" placeholder="Fullname" required autofocus>
                <label for="name">Fullname</label>
                 <?= form_error('name', '<small class="d-alert pl-2 text-danger">', '</small>'); ?>
              </div>

              <div class="form-label-group form-group">
                <input type="number" id="nik" name="nik" value="<?=set_value('nik');?>" class="form-control" placeholder="NIK" required>
                <label for="nik">Insert NIK</label>
                 <?= form_error('nik', '<small class="pl-2 text-danger d-alert">', '</small>'); ?>
              </div>              
              <hr>              
              <div class="form-label-group form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
                <?= form_error('password', '<small class="d-alert pl-2 text-danger">', '</small>'); ?>
              </div>
              <div class="form-label-group form-group">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password confirmation" required>
                <label for="password_confirmation">Password Confirmation</label>
                <?= form_error('password_confirmation', '<small class="d-alert pl-2 text-danger">', '</small>'); ?>
              </div>
              
                                      
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="myBtn">Submit</button>
              <a class="d-block text-center mt-2 small" href="<?=base_url('users');?>">Back</a>             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets');?>/vendors/plugins/Bootstrap-validator/validator.js"></script>
<script>
  window.setTimeout(function() {      
    $(".d-alert").slideUp(500, function() {
        $(this).remove();
    });
}, 5000);
</script>
</body>
</html>
