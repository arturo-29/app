<?=$header?>

<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Dashboard</h3>
						</div>

						<div class="col-auto ms-auto text-end mt-n1">

							<div class="dropdown me-2 d-inline-block">
								<a class="btn btn-light bg-white shadow-sm dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">
        <i class="align-middle mt-n1" data-feather="calendar"></i> Today
      </a>

								<div class="dropdown-menu dropdown-menu-end">
									<h6 class="dropdown-header">Settings</h6>
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</div>

							<button class="btn btn-primary shadow-sm">
      <i class="align-middle" data-feather="filter">&nbsp;</i>
    </button>
							<button class="btn btn-primary shadow-sm">
      <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
    </button>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card illustration flex-fill">
								<div class="card-body p-0 d-flex flex-fill">
									<div class="row g-0 w-100">
										<div class="col-6">
											<div class="illustration-text p-3 m-1">
												<h4 class="illustration-text">Welcome Back, Chris!</h4>
												<p class="mb-0">AppStack Dashboard</p>
											</div>
										</div>
										<div class="col-6 align-self-end text-end">
											<img src="img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">$ 24.300</h3>
											<p class="mb-2">Total Earnings</p>
											<div class="mb-0">
												<span class="badge badge-soft-success me-2"> +5.35% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-success" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">43</h3>
											<p class="mb-2">Pending Orders</p>
											<div class="mb-0">
												<span class="badge badge-soft-danger me-2"> -4.25% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-danger" data-feather="shopping-bag"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xxl-3 d-flex">
							<div class="card flex-fill">
								<div class="card-body py-4">
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<h3 class="mb-2">$ 18.700</h3>
											<p class="mb-2">Total Revenue</p>
											<div class="mb-0">
												<span class="badge badge-soft-success me-2"> +8.65% </span>
												<span class="text-muted">Since last week</span>
											</div>
										</div>
										<div class="d-inline-block ms-3">
											<div class="stat">
												<i class="align-middle text-info" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Sales / Revenue</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<span class="badge bg-info float-end">Today</span>
									<h5 class="card-title mb-0">Daily feed</h5>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Ashley Briggs">
										<div class="flex-grow-1">
											<small class="float-end">5m ago</small>
											<strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong><br />
											<small class="text-muted">Today 7:51 pm</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Chris Wood">
										<div class="flex-grow-1">
											<small class="float-end">30m ago</small>
											<strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline<br />
											<small class="text-muted">Today 7:21 pm</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing...
											</div>
										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Stacie Hall">
										<div class="flex-grow-1">
											<small class="float-end">1h ago</small>
											<strong>Stacie Hall</strong> posted a new blog<br />

											<small class="text-muted">Today 6:35 pm</small>
										</div>
									</div>

									<hr />
									<div class="d-grid">
										<a href="#" class="btn btn-primary">Load more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown position-relative">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
              <i class="align-middle" data-feather="more-horizontal"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									
								

<?=$footer?>