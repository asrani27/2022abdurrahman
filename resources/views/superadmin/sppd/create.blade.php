@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/sppd/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor SPPD</label>
                        <input type="text" name="nomor" class="form-control" placeholder="nomor" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" name="tgl" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode SPT</label>
                        <select name="spt_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($spt as $item)
                                <option value="{{$item->id}}">{{$item->kode_spt}} - {{$item->nama_spt}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Biaya</label>
                        <select name="biaya_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($biaya as $item)
                                <option value="{{$item->id}}">{{$item->kode}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP Sekda</label>
                        <select name="sekda_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($sekda as $item)
                                <option value="{{$item->id}}">{{$item->nip}} - {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input type="text" name="status" class="form-control" placeholder="" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/m/sppd" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush