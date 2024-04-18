<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sing Up</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico')?>" />
      <link rel="stylesheet" href="<?= base_url('assets/css/backend-plugin.min.css?v=1.0.0')?>">
      <link rel="stylesheet" href="<?= base_url('assets/css/backend.css?v=1.0.0')?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/remixicon/fonts/remixicon.css')?>">
      <link rel="stylesheet" href="<?= base_url('assets/vendor/@icon/dripicons/dripicons.css')?>">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card">
                     <h3 class="mb-2">Sign Up</h3>
                     <p>Create your  account.</p>
                     <form  action="<?= base_url("index.php/AccountController/new_account")?>" method="post">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" placeholder=" " name="name">
                                 <label>Full Name</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="text" placeholder=" ">
                                 <label>Last Name</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" placeholder=" " name="email">
                                 <label>Email</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" " name="password">
                                 <label>Password</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" placeholder=" ">
                                 <label>Confirm Password</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <p class="mt-3 mb-0">
                           Already have an Account <a href="<?= base_url("index.php/HomeController")?>" class="text-primary"><b>Sign In</b></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <script src="<?= base_url('assets/js/backend-bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/js/flex-tree.min.js')?>"></script>
    <script src="<?= base_url('assets/js/tree.js')?>"></script>
    <script src="<?= base_url('assets/js/table-treeview.js')?>"></script>
    <script src="<?= base_url('assets/js/sweetalert.js')?>"></script>
    <script src="<?= base_url('assets/js/chart-custom.js')?>"></script>
    <script src="<?= base_url('assets/js/slider.js')?>"></script>
    <script src="<?= base_url('assets/js/app.js')?>"></script>
  </body>
</html>
