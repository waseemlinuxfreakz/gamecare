<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Edduby</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="adminsets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="adminsets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="adminsets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="adminsets/css/style.css">
  <link rel="stylesheet" href="adminsets/css/components.css">
<!-- Start GA -->
<style type="text/css">
    .btn-primary{
      background: #FBA81A;
      border: #FBA81A;
    }
    .btn-primary:hover,body{
      background: #0C4C9C;
      border: #0C4C9C;
    }
  </style>
<!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{url('assets/images/logo/world.png')}}" alt="logo" width="150" class="">
            </div>

            <div class="card card-primary">
             

              <div class="card-body">
                <form method="POST" action="{{route('loginPost')}}" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small d-none">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                    <div class="mt-5 text-muted text-center">
             
            </div>
                  </div>

           
          
                </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

<x-admin.footer/>
</body>
</html>