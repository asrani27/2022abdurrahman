@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/spt/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode SPT</label>
                        <input type="text" name="kode_spt" class="form-control" value="{{$data->kode_spt}}"required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama SPT</label>
                        <input type="text" name="nama_spt" class="form-control" value="{{$data->nama_spt}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tgl" class="form-control" value="{{$data->tgl}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" value="{{$data->tujuan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kegiatan</label>
                        <input type="text" name="kegiatan" class="form-control" value="{{$data->kegiatan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Biaya</label>
                        <select name="biaya_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($biaya as $item)
                                <option value="{{$item->id}}" {{$data->biaya_id == $item->id ? 'selected':''}}>{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode SKPD</label>
                        <select name="skpd_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($skpd as $item)
                                <option value="{{$item->id}}" {{$data->skpd_id == $item->id ? 'selected':''}}>{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP Pegawai</label>
                        <select name="pegawai_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($pegawai as $item)
                                <option value="{{$item->id}}" {{$data->pegawai_id == $item->id ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/spt" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush