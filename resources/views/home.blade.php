@extends('layouts.master')

@section('content')
<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Selamat datang di Aplikasi Ujian Sertifikasi</div>
    <div class="panel-body">
        <div class="alert alert-info">Selamat datang <b> "{{ Auth::user()->userdetail->nama }}"</b> Username : <b>"{{ Auth::user()->email }}"</b></div>
      </div>
    </div>
  </div>
</div>
@endsection
