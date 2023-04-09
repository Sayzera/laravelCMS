<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{route('admin-home')}}">
			<span class="sidebar-brand-text align-middle">
				Düzce Üniversitesi
				<sup><small class="badge bg-primary text-uppercase">CMS</small></sup>
			</span>
			<svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
				stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
				style="margin-left: -3px">
				<path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
				<path d="M20 12L12 16L4 12"></path>
				<path d="M20 16L12 20L4 16"></path>
			</svg>
		</a>

		<div class="sidebar-user">
			<div class="d-flex justify-content-center">
				<div class="flex-shrink-0">
					<img src="/admin-asset/img/avatars/person.png" class="avatar img-fluid rounded me-1"
						alt="Charles Hall" />
				</div>
				<div class="flex-grow-1 ps-2">
					<a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
						Düzce Üniversitesi
					</a>
					<div class="dropdown-menu dropdown-menu-start">
						{{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
								data-feather="user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
							Analytics</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
								data-feather="settings"></i> Settings &
							Privacy</a>
						<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
							Help Center</a>
						<div class="dropdown-divider"></div> --}}
						<a class="dropdown-item" href="{{route('admin-logout')}}">Çıkış Yap</a>
					</div>

					<div class="sidebar-user-subtitle">Yönetici</div>
				</div>
			</div>
		</div>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>
			<li class="sidebar-item active">
				<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Kategori
						Yönetimi</span>
				</a>
				<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
					<li class="sidebar-item active"><a class="sidebar-link"
							href="{{route('admin-categories')}}">Kategoriler</a></li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
				</a>
				<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Projects <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-clients.html">Clients <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-orders.html">Orders <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-pricing.html">Pricing <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-chat.html">Chat <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-profile.html">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-invoice.html">
					<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="pages-tasks.html">
					<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tasks</span>
					<span class="sidebar-badge badge bg-primary">Pro</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="calendar.html">
					<i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Calendar</span>
					<span class="sidebar-badge badge bg-primary">Pro</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
				</a>
				<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password
							<span class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page <span
								class="sidebar-badge badge bg-primary">Pro</span></a></li>
				</ul>
			</li>

			<li class="sidebar-header">
				Components
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Components</span>
				</a>
				<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="{{route('admin-list')}}">List</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="{{route('admin-editor')}}">Editor</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="{{route('admin-inputs')}}">İnput</a></li>
				</ul>
			</li>





		</ul>


	</div>
</nav>