<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets/css/icon.css" rel="stylesheet" />
	<link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
	<!-- CSS only -->
	
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- CSS Files -->
	<link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
	<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
		id="sidenav-main">
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link  active" href="{{route('home')}}">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-tachometer-alt" id="iconDashboard"></i>
						</div>
						<span class="nav-link-text ms-1">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-folder" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Shared Files</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<div
							class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-trash" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Trash/Bin</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-bell" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Notifications</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('register-planner')}}">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-user-plus" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Register Planner</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-question" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Help & Support</span>
					</a>
				</li>
				<!-- <li class="nav-item mt-3">
					<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
				</li>
				<li class="nav-item">
					<a class="nav-link  " href="../pages/profile.html">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-user" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Profile</span>
					</a>
				</li> -->
				<hr class="horizontal light mt-1">
				<li class="nav-item">
					<a class="nav-link" href="">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-cog" id="iconProperty"></i>
						</div>
						<span class="nav-link-text ms-1">Settings</span>
					</a>
				</li>
			</ul>
		</div>		
	</aside>
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
					<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
			<div class="container-fluid py-1 px-3">
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
					<div class="ms-md-auto pe-md-3 d-flex align-items-center">
						<div class="input-group">
							<span class="input-group-text text-body"><i class="fas fa-search"aria-hidden="true"></i></span> <input type="text" class="form-control" placeholder="Type here...">
						</div>
					</div>
					            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle cursor-pointer" id="prof"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
				<h5 class="accnt">User Account</h5>
				<hr class="horizontal dark mt-3">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
						  <i class="fa fa-user-circle avatar avatar-sm  me-3 " id="prof-n"></i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">{{$data->first_name}}</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          {{$data->last_name}}
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
               <li class="mb-2">
                  <a class="dropdown-item border-radius-md" data-bs-toggle="modal"  data-bs-target="#exampleModal" href="">
                    <div class="d-flex py-1">
                      <div class="my-auto">
						  <i class="fa fa-sign-out avatar avatar-sm  me-3 " id="prof-n"></i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Logout</span>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
		 </div>
			</div>
		</nav>
		@yield('content')
	 <footer class="footer pt-3"></footer>
	</div>
	</main>
	<!--   Core JS Files   -->
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
	<script src="/assets/js/plugins/chartjs.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/emodal@1.2.69/dist/eModal.min.js" />
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	
	<script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>

</body>

</html>
