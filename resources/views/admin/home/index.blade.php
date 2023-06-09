@extends('admin.layout')


@section('content')
<main class="content">
	<div class="container-fluid p-0">
		<h1 class="h3 mb-3"><strong>Düzce Üniversitesi</strong> Yönetim Paneli</h1>

		<div class="row">
			<div class="col-xl-12 col-xxl-12 d-flex">
				<div class="w-100">
					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Kategoriler</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="align-left"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">{{$data['categories']}}</h1>

								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Visitors</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="users"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">14.212</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Earnings</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="dollar-sign"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">$21.300</h1>
									<div class="mb-0">
										<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Orders</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-primary">
												<i class="align-middle" data-feather="shopping-cart"></i>
											</div>
										</div>
									</div>
									<h1 class="mt-1 mb-3">64</h1>
									<div class="mb-0">
										<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25%
										</span>
										<span class="text-muted">Since last week</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>




	</div>
</main>
@endsection