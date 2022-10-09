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
            <form role="form" method="post" action="/m/biaya/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Biaya</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Biaya</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <select name="jabatan_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}" {{$data->jabatan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Harian</label>
                        <input type="text" name="b_harian" class="form-control" value="{{$data->b_harian}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Perjalanan</label>
                        <input type="text" name="b_perjalanan" class="form-control" value="{{$data->b_perjalanan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Biaya Dinas</label>
                        <input type="text" name="b_dinas" class="form-control" value="{{$data->b_dinas}}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/biaya" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush