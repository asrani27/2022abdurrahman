@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">SPT</h3>
                <div class="pull-right box-tools">
                    <a href="/m/spt/create" type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode SPT</th>
                            <th>Nama SPT</th>
                            <th>Tgl</th>
                            <th>Tujuan</th>
                            <th>Kegiatan</th>
                            <th>Kode Biaya</th>
                            <th>Kode SKPD</th>
                            <th>NIP</th>
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
                            <td>{{$item->kode_spt}}</td>
                            <td>{{$item->nama_spt}}</td>
                            <td>{{$item->tgl}}</td>
                            <td>{{$item->tujuan}}</td>
                            <td>{{$item->kegiatan}}</td>
                            <td>{{$item->biaya->kode}}</td>
                            <td>{{$item->skpd->kode}}</td>
                            <td>{{$item->pegawai->nip}}</td>
                            <td>
                                <a href="/m/spt/edit/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="/m/spt/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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