<?php $__env->startSection('title'); ?>Form Penambahan
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Form Penambahan Data PMKS Anak Yatim</h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
                                    
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Survior</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                    
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Desa</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Dusun</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Kecamatan</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Pekerjaan Wali</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Pendidikan</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Prestasi Formal</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>1</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
                                
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">Pilih Prestasi Non Formal</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Pilihan</option>
										<option>...</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
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
											<input class="form-control digits" type="text" placeholder="Tempat lahir" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">No HP/WA</label>
										<div class="col-sm-9">
											<input class="form-control m-input digits" type="tel" value="+62" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Date</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="2018-01-01" />
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
	
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\AdamNizamPKL\Viho-Laravel-8\theme\resources\views/admin/pages/sample-page.blade.php ENDPATH**/ ?>