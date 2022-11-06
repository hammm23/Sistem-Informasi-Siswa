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
            <h1>Data Diri Siswa</h1>
            <div class="section-header-button">
                <a href="" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Tabel Siswa</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Keterangan Tentang Diri Peserta Didik</h2>
            <p class="section-lead">
                Anda dapat mengelola semua data siswa di sini, seperti tambah, edit, dan hapus.
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nama Bank</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>

                          </td>

                        </tr>
                    </table>
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