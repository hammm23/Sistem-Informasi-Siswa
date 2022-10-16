@extends('dashboard-layouts.app')
@section('title')
Tambah Data Diri Siswa
@endsection
@section('content')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
@endsection
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('students.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Siswa</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('students.index') }}">Tabel Siswa</a></div>
            <div class="breadcrumb-item">Tambah Data Siswa</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Isi form Tambah Siswa disini</h2>
        <p class="section-lead">
            Yang memiliki tanda <span class="text-danger">*</span> wajib diisi!
        </p>

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Success!</strong> {{ Session('success') }}.
            </div>
            @endif
            
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Karyawan</h4>
                    </div>
                    <form method="POST" action="" class="needs-validation" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama">Nama <span class="text-danger">*</span></label>
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" placeholder="Masukkan nama Anda">
                                        @if (count($errors) > 0)
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Mohon isi nama Anda
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nis">Nomor Induk Siswa <span class="text-danger">*</span></label>
                                        <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" nis="nis" value="{{ old('nis') }}" required autocomplete="nis">
                                        @if (count($errors) > 0)
                                            @error('nis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your nis
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="nisn">NISN <span class="text-danger">*</span></label>
                                        <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn">
                                        @if (count($errors) > 0)
                                            @error('nisn')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your place of birth
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                        <input id="tempat_lahir" type="date" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir">
                                        @if (count($errors) > 0)
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your date of birth
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                        <input id="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir">
                                        @if (count($errors) > 0)
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your tanggal_lahir
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select id="jenis_kelamin" type="text" class="form-control select2 @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" required autocomplete="jenis_kelamin"> 
                                            <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                                            <option value="Laki-laki">Laki-laki</option>                   
                                            <option value="Perempuan">Perempuan</option>                   
                                        </select>
                                        @if (count($errors) > 0)
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your jenis_kelamin
                                            </div>
                                        @endif
                                    </div> 

                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="agama" class="form-label">Agama <span class="text-danger">*</span></label>
                                        <select id="agama" type="text" class="form-control select2 @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama"> 
                                            <option value="" disabled selected>- Pilih Agama -</option>
                                            <option value="Islam">Islam</option>                   
                                            <option value="Kristen Protestan">Kristen Protestan</option>                   
                                            <option value="Kristen Katolik">Kristen Katolik</option>                   
                                            <option value="Hindu">Hindu</option>  
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        @if (count($errors) > 0)
                                            @error('agama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your agama
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="status_dlm_keluarga">Status dalam Keluarga <span class="text-danger">*</span></label>
                                        <input id="status_dlm_keluarga" type="text" class="form-control @error('status_dlm_keluarga') is-invalid @enderror" name="status_dlm_keluarga" value="{{ old('status_dlm_keluarga') }}" required autocomplete="status_dlm_keluarga">
                                        @if (count($errors) > 0)
                                            @error('status_dlm_keluarga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your status_dlm_keluarga
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="anak_ke">Anak Ke <span class="text-danger">*</span></label>
                                        <input id="anak_ke" type="text" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" value="{{ old('anak_ke') }}" required autocomplete="anak_ke">
                                        @if (count($errors) > 0)
                                            @error('anak_ke')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your anak_ke
                                            </div>
                                        @endif
                                    </div>
                            

                                    <div class="form-group">
                                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                        @if (count($errors) > 0)
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your alamat
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telp_rumah">Nomor Telepon Rumah <span class="text-danger">*</span></label>
                                        <input id="no_telp_rumah" type="text" class="form-control @error('no_telp_rumah') is-invalid @enderror" name="no_telp_rumah" value="{{ old('no_telp_rumah') }}" required autocomplete="no_telp_rumah">
                                        @if (count($errors) > 0)
                                            @error('no_telp_rumah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your no_telp_rumah
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="sekolah_asal">Sekolah Asal <span class="text-danger">*</span></label>
                                        <input id="sekolah_asal" type="text" class="form-control @error('sekolah_asal') is-invalid @enderror" name="sekolah_asal" value="{{ old('sekolah_asal') }}" required autocomplete="sekolah_asal">
                                        @if (count($errors) > 0)
                                            @error('sekolah_asal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        @else
                                            <div class="invalid-feedback">
                                                Please fill in your sekolah_asal
                                            </div>
                                        @endif
                                    </div>

                            <div class="float-right">
                                <div class="form-group">
                                    <label for=""></label>
                                    <button class="btn btn-primary">Buat</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-libraies')
<script src="{{ asset('assets/css/select2/dist/js/select2.full.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection