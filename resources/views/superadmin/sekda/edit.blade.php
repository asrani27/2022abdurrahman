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
            <form role="form" method="post" action="/m/sekda/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP Sekda</label>
                        <input type="text" name="nip" class="form-control" value="{{$data->nip}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Sekda</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                            <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Agama</label>
                        <select name="agama" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="islam" {{$data->agama == 'islam' ? 'selected':''}}>Islam</option>
                            <option value="kristen" {{$data->agama == 'kristen' ? 'selected':''}}>Kristen</option>
                            <option value="hindu" {{$data->agama == 'hindu' ? 'selected':''}}>Hindu</option>
                            <option value="budha" {{$data->agama == 'budha' ? 'selected':''}}>Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
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

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/sekda" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush