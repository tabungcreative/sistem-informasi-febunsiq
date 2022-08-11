<x-layout>
    @include('partials._hero')
    <!--  berita -->
		<section class=" mt-5">
			<div class="container-fluid p-4 bg-white">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<div class="separator mt-3">
								<h2>Berita Terkini</h2>
								<div class="line"></div>
							</div>
						</div>
						<div class="row mt-5">
							<h5 class="">Kegiatan Study Tour FEB UNSIQ di Berlin,Jerman Untuk meningkatkan antusias Mahasiswa dalam bidang Informasi</h5>
							<div class="row mt-5">
								<div class="col-lg-4 p-3"><img src="{{asset('images/img.jpg')}}" class="img-thumbnail img-fluid" alt="..." style="width: 300px; height: 200px" /></div>
								<div class="col-lg-7 p-3 ms-5">
									<p class="text-secondary">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
										make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
										containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir berita -->
</x-layout>