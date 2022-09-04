{{-- <div class="container-fluid d-flex justify-content-end" style="background-color: #930909; color: #fff">
	<div class="row">
		<div class="d-flex justify-content-between align-items-center" style="background-color: #343434; padding: 0.5rem">
			<a href="/login-mahasiswa" class="login">Login Mahasiswa</a>
			<div class="">|</div>
			<a href="/login-dosen" class="login">Login Dosen</a>
		</div>
	</div>
</div> --}}
<!-- Navbar  -->
<nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #fff">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="{{'images/logo feb fix.png'}}" alt="" width="80" height="60" class="d-inline-block align-text-top" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item ms-3" style="font-weight: 600">
					<a class="nav-link {{ Request::is('/') ? 'active-nav' : '' }}" href="/">Beranda</a>
				</li>
				<li class="nav-item ms-3 dropdown" style="font-weight: 600">
					<a class="nav-link dropdown-toggle {{ Request::is('akuntansi') ? 'active-nav' : '' }} {{ Request::is('manajemen') ? 'active-nav' : '' }} {{ Request::is('perbankan-syariah') ? 'active-nav' : '' }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Program Studi </a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item {{ Request::is('akuntansi') ? 'active-drop' : '' }}" href="/akuntansi">Akuntasi</a></li>
						<li><a class="dropdown-item {{ Request::is('manajemen') ? 'active-drop' : '' }}" href="/manajemen">Manajemen</a></li>
						<li><a class="dropdown-item {{ Request::is('perbankan-syariah') ? 'active-drop' : '' }}" href="/perbankan-syariah">Perbankan Syari'ah</a></li>
					</ul>
				</li>
				<li class="nav-item ms-3 dropdown" style="font-weight: 600">
					<a class="nav-link dropdown-toggle {{ Request::is('pelayanan-mahasiswa') ? 'active-nav' : '' }} {{ Request::is('pembayaran-mahasiswa') ? 'active-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Layanan </a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item {{ Request::is('pelayanan-mahasiswa') ? 'active-drop' : '' }}" href="/pelayanan-mahasiswa">Mahasiswa</a></li>
						<li><a class="dropdown-item {{ Request::is('pembayaran-mahasiswa') ? 'active-drop' : '' }}" href="/pembayaran-mahasiswa">Pembayaran Mahasiswa</a></li>
						<li><a class="dropdown-item" href="#">Perpustakaan</a></li>
						<li><a class="dropdown-item" href="#">File Unduhan</a></li>
					</ul>
				</li>
				<li class="nav-item ms-3 dropdown" style="font-weight: 600">
					<a class="nav-link dropdown-toggle {{ Request::is('sejarah-feb') ? 'active-nav' : '' }} {{ Request::is('visi-misi-feb') ? 'active-nav' : '' }} {{ Request::is('struktur-organisasi') ? 'active-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item {{ Request::is('sejarah-feb') ? 'active-drop' : '' }}" href="/sejarah-feb">Sejarah Feb Unsiq</a></li>
						<li><a class="dropdown-item {{ Request::is('visi-misi-feb') ? 'active-drop' : '' }}" href="/visi-misi-feb">Visi, Misi, dan Tujuan</a></li>
						<li><a class="dropdown-item {{ Request::is('struktur-organisasi') ? 'active-drop' : '' }}" href="/struktur-organisasi">Struktur Organisasi</a></li>
					</ul>
				</li>
				<li class="nav-item ms-3" style="font-weight: 600">
					<a class="nav-link" href="#">SPMI</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Akhir Navbar -->



















































































































