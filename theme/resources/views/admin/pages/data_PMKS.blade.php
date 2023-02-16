@extends('layouts.admin.master')

@section('title')Basic Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Data PMKS Anak Yatim Kabupaten Lombok Tengah</h5>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								
								<tr>
									<th scope="col">NO</th>
									<th scope="col">Nama Lengkap</th>
									<th scope="col">No KAKA</th>
									<th scope="col">No NIK</th>
									<th scope="col">Tempat Lahir</th>
									<th scope="col">Alamat</th>
									<th scope="col">Alamat Sekolah</th>
									<th scope="col">Nama Wali </th>
									<th scope="col">No HP/WA</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Foto Anak</th>
									<th scope="col">Tahun</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								{{-- @foreach ( $data  as $item) --}}
								<tr>
									{{-- <th scope="row">{{$loop->iteration}}</th> --}}
									{{-- <th scope="row">{{$item->alamat}}</th> --}}
									<th scope="row">										
										<button class="btn btn-success" type="button">Detail</button>
										<button class="btn btn-danger" type="button">Hapus</button>										
										<button class="btn btn-warning" type="button">Edit</button>
									</th>
								</tr>
								{{-- @endforeach --}}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection