<x-layout>
    <!-- Visi -->
		<section class="pelayanan-mahasiswa bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mt-5">
						<h2 class="h2">Pembayaran Mahasiswa</h2>
						<hr style="border: 2px solid #b6b7b7" />
						<span class="text-secondary">Untuk konfirmasi pembayaran mohon mengisi form dibawah!</span>
						<form action="" class="mt-5">
							<div class="d-grid gap-2">
								<div class="mb-3">
									<label for="nama" class="form-label" style="font-weight: 500">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" />
								</div>
								<div class="mb-3">
									<label for="nim" class="form-label" style="font-weight: 500">Nim</label>
									<input type="text" name="nim" class="form-control" id="nim" placeholder="Nim" />
								</div>
								<div class="mb-3">
									<label for="prodi" class="form-label" style="font-weight: 500">Program Studi</label>
									<select class="form-select text-secondary" aria-label="Default select example" name="surat" id="surat">
										<option selected>pilih</option>
										<option value="1">Manajemen</option>
										<option value="2">Akuntansi</option>
										<option value="3">Perbankan Syariah</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="semester" class="form-label" style="font-weight: 500">Semester</label>
									<select class="form-select text-secondary" aria-label="Default select example" name="semester" id="semester">
										<option selected>pilih</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="buktiPembayaran" class="form-label" style="font-weight: 500">Bukti Pembayaran</label>
									<input class="form-control" type="file" id="buktiPembayaran" name="buktiPembayaran" multiple />
								</div>
								<p style="color: #ce1212; font-weight: 500">*Pastikan semua data terisi dan benar!</p>
								<button type="button" class="btn btn-login btn-block mb-5">Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Akhir Visi -->
</x-layout>