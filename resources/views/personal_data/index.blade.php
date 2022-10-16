@extends('dashboard-layouts.app')
@section('title')
Data Diri Siswa
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection
@section('content')
<section class="section">

          <div class="section-header">
            <h1>Data Peserta Didik</h1>
            <div class="section-header-button">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Daftar Siswa</div>
            </div>
        </div>

         <div class="section-body">
            <h2 class="section-title">Keterangan Tentang Diri Peserta Didik</h2>
            <p class="section-lead">
                Anda dapat mengelola semua data siswa di sini, seperti tambah dan edit.
            </p>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Semua Data Siswa</h4>
                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>  
                            <th>No.</th>
                            <th>Nama Peserta Didik (Lengkap)</th>
                            <th>Nomor Induk Siswa</th>
                            <th>NISN</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat Peserta Didik</th>
                            <th>Sekolah Asal</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      @foreach ( $students as $student)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $student->nama}}</td>
                          <td>{{ $student->nis}}</td>
                          <td>{{ $student->nisn}}</td>
                          <td>{{ $student->tempat_lahir}}</td>
                          <td>{{ $student->tanggal_lahir}}</td>
                          <td>{{ $student->jenis_kelamin}}</td>
                          <td>{{ $student->agama}}</td>
                          <td>{{ $student->alamat}}</td>
                          <td>{{ $student->sekolah_asal}}</td>
                          <td>
                            
                          </td>
                        </tr>
                      @endforeach
                    </table>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>

</section>
@endsection
@section('script-libraies')
<script src="{{ asset('assets/js/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/css/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/css/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
@endsection
@section('script-page-specific')
<script src="{{ asset('assets/js/page/modules-datatables.js') }}"></script>
@endsection