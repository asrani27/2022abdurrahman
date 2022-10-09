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
            <form role="form" method="post" action="/m/jabatan/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Jabatan</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jabatan</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/jabatan" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush