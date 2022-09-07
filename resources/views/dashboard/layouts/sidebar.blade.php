                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
									<span data-feather="home"></span>
									Dashboard
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{Request::is('dashboard/berita*') ? 'active' : ''}}" href="/dashboard/berita">
									<span data-feather="file-text"></span>
									Berita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{Request::is('dashboard/pengumuman*') ? 'active' : ''}}" href="/dashboard/pengumuman">
									<span data-feather="file-text"></span>
									Pengumuman
								</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link {{Request::is('dashboard/file-unduhan*') ? 'active' : ''}}" href="/dashboard/file-unduhan">
									<span data-feather="file-text"></span>
									File Unduhan
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link {{Request::is('dashboard/dosen*') ? 'active' : ''}}" href="/dashboard/dosen">
									<span data-feather="file-text"></span>
									Dosen
								</a>
							</li> --}}
						</ul>
					</div>
				</nav>