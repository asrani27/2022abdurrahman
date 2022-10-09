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
            <form role="form" method="post" action="/m/biaya/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Biaya</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Biaya</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <select name="jabatan_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Harian</label>
                        <input type="text" name="b_harian" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Perjalanan</label>
                        <input type="text" name="b_perjalanan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Dinas</label>
                        <input type="text" name="b_dinas" class="form-control" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/m/biaya" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush