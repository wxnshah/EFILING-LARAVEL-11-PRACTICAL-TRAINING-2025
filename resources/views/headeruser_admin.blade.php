								<div class="sb-sidenav-menu-heading">Maklumat</div>
								<a class="nav-link" href="{{ route('AdminAddInformation') }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-layer-plus"></i>
									</div> Tambah Maklumat
								</a>
								<a class="nav-link" href="{{ route('AdminListInformation') }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-layer-group"></i>
									</div> Senarai Maklumat
								</a>

								<div class="sb-sidenav-menu-heading">Pengguna</div>
								<a class="nav-link" href="{{ route('AdminListUsers') }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-users"></i>
									</div> Senarai Pengguna
								</a>
								<a class="nav-link" href="{{ route('AdminPersonalInformation', Auth::user()->id) }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-user-shield"></i>
									</div> Maklumat Peribadi
								</a>