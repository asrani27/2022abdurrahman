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
            <form role="form" method="post" action="/m/pembayaran/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Bayar</label>
                        <input type="text" name="nomor" class="form-control" value="{{$data->nomor}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor SPPD</label>
                        <select name="sppd_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($sppd as $item)
                                <option value="{{$item->id}}" {{$data->sppd_id == $item->id ? 'selected':''}}>{{$item->nomor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" value="{{$data->jumlah}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bendahara</label>
                        <select name="bendahara_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($bendahara as $item)
                                <option value="{{$item->id}}" {{$data->bendahara_id == $item->id ? 'selected':''}}>{{$item->nip}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pegawai</label>
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
                    <a href="/m/pembayaran" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush