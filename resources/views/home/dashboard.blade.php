@extends('layouts.master')
@section('title', 'Admin|Home')
@section('content')
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
			<div class="container-fluid py-1 px-3">
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
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
			</div>
			</div>
		</nav>
	 <div class="container-fluid py-4">
		<div class="row">
			@if(Session::has ('success') )
			<div class="alert alert-success"> {{Session::get('success')}}</div>
			@endif @if(Session::has ('fail') )
			<div class="alert alert-danger" id="alerts"> {{Session::get('fail')}}</div>
			@endif
			<h3 class="dash">Dashboard</h3>
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Alert</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" id="text-in">
					Are you sure you want to logout?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn bg-gradient-success"><a class="out" href="{{route('logout')}}">Yes,sure</a></button>
				</div>
			</div>
		</div>
		</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
								<div class="numbers">
									<p class="text-sm mb-0 text-capitalize font-weight-bold">Town Planners</p>
									<h5 class="font-weight-bolder mb-0">$53,000 <span class="text-success text-sm font-weight-bolder">+55%</span>
									</h5>
								</div>
							</div>
							<div class="col-4 text-end">
								<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
									<i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
								<div class="numbers">
									<p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
									<h5 class="font-weight-bolder mb-0"> 2,300 <span class="text-success text-sm font-weight-bolder">+3%</span>
									</h5>
								</div>
							</div>
							<div class="col-4 text-end">
								<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
									<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
								<div class="numbers">
									<p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
									<h5 class="font-weight-bolder mb-0"> +3,462 <span class="text-danger text-sm font-weight-bolder">-2%</span>
									</h5>
								</div>
							</div>
							<div class="col-4 text-end">
								<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"> <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6">
				<div class="card">
					<div class="card-body p-3">
						<div class="row">
							<div class="col-8">
								<div class="numbers">
									<p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
									<h5 class="font-weight-bolder mb-0"> $103,430 <span class="text-success text-sm font-weight-bolder">+5%</span>
									</h5>
								</div>
							</div>
							<div class="col-4 text-end">
								<div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"> <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <form action="" class="mt-3" method="POST" enctype="multipart/form-data">
			<label for="file" class="label-file"><i class="fa fa-cloud-upload mt-3 mx-3" id="iconBody">  Upload a file</label>
			<input type="file" class="form-control-file" id="file" name="file">
		</form> -->
		<footer class="footer pt-3"></footer>
	</div>
	</main>
@endsection
