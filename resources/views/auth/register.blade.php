<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <title> Signup|Page </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/css/icon.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>
<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-2">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="dash">Sign Up</h3>
                  <p class="mb-0">Create your Account inorder to access the Dashboard</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('new')}}">
                    @csrf
                    @if(Session::has ('success') )
                    <div class="alert alert-success"> {{Session::get('success')}}</div>
                    @endif @if(Session::has ('fail') )
                    <div class="alert alert-danger" id="alerts"> {{Session::get('fail')}}</div>
                    @endif 
                    <label>First Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="First Name" name="firstname">
                      <span class="text-danger">@error('firstname') {{$message}} @enderror</span> 
                    </div>
                    <label>Last Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Last Name" 
                        aria-describedby="password-addon" name="lastname">
                      <span class="text-danger">@error('lastname') {{$message}} @enderror</span> 
                    </div>
                    <label>National ID Number</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="NIDA" 
                        aria-describedby="password-addon" name="nida">
                      <span class="text-danger">@error('nida') {{$message}} @enderror</span> 
                    </div>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email"
                        aria-describedby="email-addon" name="email">
                      <span class="text-danger">@error('email') {{$message}} @enderror</span> 
                    </div>
                    <label>Phone Number</label>
                    <div class="mb-3">
                      <input type="phone" class="form-control" placeholder="Phone Number"
                        aria-describedby="password-addon" name="phone">
                      <span class="text-danger">@error('phone') {{$message}} @enderror</span> 
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password"
                        aria-describedby="password-addon" name="password">
                      <span class="text-danger">@error('password') {{$message}} @enderror</span> 
                    </div>
                    <div class="text-center">
                      <button class="btn bg-gradient-info w-100 mt-4 mb-0">Sign up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Already have an account?
                    <a href="{{route('login')}}" class="text-info text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>