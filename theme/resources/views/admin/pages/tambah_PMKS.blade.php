@extends('layouts.admin.master')

@section('title')Form Penambahan
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Form Penambahan Data PMKS Anak Yatim</h5>
					</div>
					<form class="form theme-form" method="POST" action="">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Nama Lengkap</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Nama Lengkap" name="nama_lengkap" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Nomor KAKA</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Nomor KAKA" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Nomor NIK</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Nomor NIK" />
										</div>
									</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Tempat lahir</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Tempat lahir" name="tempat_lahir" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Alamat Sekolah</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Alamat Sekolah" name="alamat_sekolah" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Alamat Anak yatim" name="alamat" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Nama Wali</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="text" placeholder="Nama Wali" name="nama_wali"/>
										</div>
									</div>
									
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">No HP/WA</label>
										<div class="col-sm-9">
											<input class="form-control m-input digits" type="text" value="+62" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="2023-04-01" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Tahun</label>
										<div class="col-sm-9">
											<input class="form-control m-input digits" value="<?php echo date('Y'); ?>"/>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<div class="col-sm-9 offset-sm-3">
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	@endpush

@endsection