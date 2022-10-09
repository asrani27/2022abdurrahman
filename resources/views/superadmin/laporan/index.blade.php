@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="/laporan/pegawai" class="btn btn-primary" target="_blank">DATA PEGAWAI</a>
                <a href="/laporan/sekda" class="btn btn-primary" target="_blank">DATA SEKDA</a>
                <a href="/laporan/jabatan" class="btn btn-primary" target="_blank">DATA JABATAN</a>
                <a href="/laporan/skpd" class="btn btn-primary" target="_blank">DATA SKPD</a>
                <a href="/laporan/sppd" class="btn btn-primary" target="_blank">DATA SPPD</a>
                <a href="/laporan/bendahara" class="btn btn-primary" target="_blank">DATA BENDAHARA</a>
                <a href="/laporan/spt" class="btn btn-primary" target="_blank">DATA SPT</a>
                <a href="/laporan/biaya" class="btn btn-primary" target="_blank">DATA BIAYA</a>
                <a href="/laporan/pembayaran" class="btn btn-primary" target="_blank">DATA PEMBAYARAN</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush