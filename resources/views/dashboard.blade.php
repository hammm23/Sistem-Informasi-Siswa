@extends('dashboard-layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
              <div class="row">
      <div class="col-12 mb-4">
        <div class="hero bg-danger text-white" style="background-color: #CE1212 !important;">
          <div class="hero-inner">
            <h2>Sistem Informasi Siswa</h2>
            <p class="lead">
              Selamat Datang, <strong>{{ Auth::user()->name }}</strong>!
            </p>
          </div>
        </div>
      </div>
    </div>
        </section>
@endsection