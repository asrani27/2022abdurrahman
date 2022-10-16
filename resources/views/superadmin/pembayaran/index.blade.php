@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pembayaran</h3>
                <div class="pull-right box-tools">
                    <a href="/m/pembayaran/create" type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor pembayaran</th>
                            <th>Nomor SPPD</th>
                            <th>Jumlah</th>
                            <th>Bendahara</th>
                            <th>Pegawai</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nomor}}</td>
                            <td>{{$item->sppd == null ? '-': $item->sppd->nomor}}</td>
                            <td>{{number_format($item->jumlah)}}</td>
                            <td>{{$item->bendahara == null ? '-': $item->bendahara->nama}}</td>
                            <td>{{$item->pegawai == null ? '-': $item->pegawai->nama}}</td>
                            <td>
                                <a href="/m/pembayaran/edit/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="/m/pembayaran/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin di hapus?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush