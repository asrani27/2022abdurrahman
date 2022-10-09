@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">SPPD</h3>
                <div class="pull-right box-tools">
                    <a href="/m/sppd/create" type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor SPPD</th>
                            <th>Tgl</th>
                            <th>Kode SPT</th>
                            <th>Kode Biaya</th>
                            <th>Jumlah</th>
                            <th>NIP Sekda</th>
                            <th>status</th>
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
                            <td>{{$item->tgl}}</td>
                            <td>{{$item->spt->kode_spt}}</td>
                            <td>{{$item->biaya->kode}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->sekda->nip}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="/m/sppd/edit/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="/m/sppd/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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