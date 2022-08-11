<x-layout>
    <section class="pelayanan-mahasiswa bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-5">
						<h2 class="h2">Pelayanan Mahasiswa</h2>
						<hr style="border: 2px solid #b6b7b7" />
						<span class="text-secondary">Untuk melakukan pengajuan surat mohon mengisi form dibawah dan cek email anda!</span>
						<form action="" class="mt-5">
							<div class="d-grid gap-2">
								<div class="mb-3">
									<label for="email" class="form-label" style="font-weight: 500">Alamat Email</label>
									<input type="email" name="email" class="form-control" id="email" placeholder="alamat email" />
								</div>
								<div class="mb-3">
									<label for="nama" class="form-label" style="font-weight: 500">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" />
								</div>
								<div class="mb-3">
									<label for="nim" class="form-label" style="font-weight: 500">Nim</label>
									<input type="text" name="nim" class="form-control" id="nim" placeholder="Nim" />
								</div>
								<div class="mb-3">
									<label for="surat" class="form-label" style="font-weight: 500">Pilih Jenis Pengajuan Surat</label>
									<select class="form-select text-secondary" aria-label="Default select example" name="surat" id="surat">
										<option selected>pilih</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									</select>
								</div>
								<p style="color: #ce1212">*Pastikan semua data terisi dan benar!</p>
								<button type="button" class="btn btn-login btn-block mb-5">Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
</x-layout>