<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sing in</title>
  <link rel="stylesheet" href="<?= base_url('assets/vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/vendors/css/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/vertical-layout-light/style.css')?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="<?= base_url("index.php/AccountController/new_account")?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"  name="password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign Up</button> 
               </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?= base_url("index.php/HomeController")?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
  <script src="<?= base_url('assets/js/off-canvas.js')?>"></script>
  <script src="<?= base_url('assets/js/hoverable-collapse.js')?>"></script>
  <script src="<?= base_url('assets/js/template.js')?>"></script>
  <script src="<?= base_url('assets/js/settings.js')?>"></script>
  <script src="<?= base_url('assets/js/todolist.js')?>"></script>
</body>

</html>
