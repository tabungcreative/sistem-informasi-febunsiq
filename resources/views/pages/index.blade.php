<x-layout>
    @include('partials._hero')
    <!-- Visi -->
		<section class="visi mt-5">
			<div class="container-lg">
				<div class="row">
					<div class="col-lg-5 mb-4">
						<img src="{{'/images/img.jpg'}}" class="img" alt="" style="height: 250px; width: 22rem" />
					</div>
					<div class="col-lg-2 d-flex justify-content-center">
						<div class="vl"></div>
					</div>
					<div class="col-lg-5">
						<h3>Visi</h3>
						<p>Menjadi Fakultas Ekonomi dan Bisnis yang menjunjung nilai-nilai Islam dan unggul dibidang Kewirausahaan pada Tahun 2031.</p>
						<a href="/visi-misi-feb" class="red">Selengkapnya</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Visi -->
		<!--  Pengumuman -->
		<section class="pengumuman mt-5">
			<div class="container-fluid bg-white">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<div class="separator mt-3">
								<h2>Pengumuman</h2>
								<div class="line"></div>
							</div>
						</div>
						<div id="carousel-pengumuman" class="carousel slide" data-bs-ride="carousel" style="position: relative">
							<div class="carousel-inner">
								<div class="carousel-item active" data-bs-interval="1000">
									<div class="row mt-5 ms-5 d-flex justify-content-between">
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item" data-bs-interval="2000">
									<div class="row mt-5 ms-5 d-flex justify-content-between">
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mt-5 ms-5 d-flex justify-content-between">
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="card border-0">
												<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image berita" style="height: 200px" />
												<div class="card-body">
													<p class="card-text">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</p>
													<span class="d-block text-secondary">30 Februari 2022</span>
													<a href="/pengumuman" class="berita">Selengkapnya</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-indicators mt-5" style="position: relative">
								<button type="button" data-bs-target="#carousel-pengumuman" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carousel-pengumuman" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carousel-pengumuman" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Pengumuman -->
		<!--  Berita Terkini-->
		<section class="berita-section mt-5">
			<div class="container-fluid p-4" style="background-color: #fff">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<div class="separator mt-3">
								<h2>Berita Terkini</h2>
								<div class="line"></div>
							</div>
						</div>
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-5">
							<div class="col">
								<div class="card shadow-sm">
									<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
									<div class="card-body">
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>	
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card shadow-sm">
									<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
									<div class="card-body">
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</div>
							<div class="col">
							<div class="card shadow-sm">
								<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
									<div class="card-body">
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Berita Terkini -->
		<!--  Program Kami -->
		<section class="program mt-5">
			<div class="container-fluid p-4" style="background-color: #fff">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10 col-md-8">
						<div class="row">
							<div class="separator mt-3">
								<h2>Program Kami</h2>
								<div class="line"></div>
							</div>
						</div>
						<div class="row mt-5 ms-5 d-flex justify-content-between">
							<div class="col-lg-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-grid gap-2">
											<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
											<a href="" class="btn btn-xl btn-base mt-3">Kelas Eksekutif</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-grid gap-2">
											<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
											<a href="" class="btn btn-xl btn-base mt-3">Kelas Karyawan</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Program Kami -->
	</x-layout>
	{{-- <div class="album py-5 bg-light">
		<div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<div class="col">
					<div class="card shadow-sm">
						<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>	
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card shadow-sm">
						<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
				<div class="col">
				<div class="card shadow-sm">
					<img class="card-img-top" src="{{'/images/img.jpg'}}" alt="image pengumuman" style="height: 200px" />
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}