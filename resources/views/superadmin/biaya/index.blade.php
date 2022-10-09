@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Biaya</h3>
                <div class="pull-right box-tools">
                    <a href="/m/biaya/create" type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Biaya Harian</th>
                            <th>Biaya Perjalanan</th>
                            <th>Biaya Dinas</th>
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
                            <td>{{$item->kode}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jabatan == null ? '': $item->jabatan->nama}}</td>
                            <td>{{number_format($item->b_harian)}}</td>
                            <td>{{number_format($item->b_perjalanan)}}</td>
                            <td>{{number_format($item->b_dinas)}}</td>
                            <td>
                                <a href="/m/biaya/edit/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="/m/biaya/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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