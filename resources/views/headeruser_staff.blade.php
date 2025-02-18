								<div class="sb-sidenav-menu-heading">Maklumat</div>
								<a class="nav-link" href="{{ route('AddInformation') }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-plus-minus"></i>
									</div> Tambah Maklumat
								</a>
								<a class="nav-link" href="{{ route('ListInformation') }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-layer-group"></i>
									</div> Senarai Maklumat
								</a>

								<div class="sb-sidenav-menu-heading">Pengguna</div>
								<a class="nav-link" href="{{ route('PersonalInformation', Auth::user()->id) }}">
									<div class="sb-nav-link-icon">
										<i class="fa-sharp-duotone fa-solid fa-user-shield"></i>
									</div> Maklumat Peribadi
								</a>