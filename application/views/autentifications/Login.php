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
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if(isset($error)){?>
              <div style="color:red"><?= $error?></div>
              <?php }?>
              <form class="pt-3" action="<?= base_url("index.php/HomeController/login")?>" method="post">
                <div class="form-group">
                  <?php if(isset($mail)){?>
                  <input type="email" name="mail" value="<?= $mail?>" class="form-control form-control-lg"
                    id="exampleInputEmail1" placeholder="Username" required>
                  <label>Email</label>
                  <?php }else{?>
                  <input type="email" name="mail" class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Username" required>
                  <label>Email</label>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <?php if(isset($mdp)){?>
                  <input type="password" name="mdp" value=<?= $mdp?> class="form-control form-control-lg"
                    id="exampleInputPassword1" placeholder="Password" required>
                  <label>Password</label>
                  <?php }else{?>
                  <input type="password" name="mdp" class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password" required>
                  <label>Password</label>
                  <?php } ?>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign
                    In</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?= base_url("index.php/HomeController/signin")?>"
                    class="text-primary">Create</a>
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