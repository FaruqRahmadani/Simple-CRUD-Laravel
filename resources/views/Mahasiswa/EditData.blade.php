@extends('Mahasiswa.Layouts.Master')
@section('content')
  <div class="content-wrapper">
      <h3>
        @section('title')
          {{$Title = 'Tambah Data Admin'}}
        @endsection
        {{$Title}}
      </h3>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel well">
            <a href="/" class="btn btn-pill-right btn-info" type="button">
              <b>Kembali</b>
            </a>
            <div class="panel-body">
              {!! Form::open(['url'=>Request::url(),'files'=>true,'class'=>'register-form', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                <div class="form-group">
                  <label class="col-lg-2 control-label">NPM</label>
                  <div class="col-lg-10">
                    <input class="form-control" type="text" name="NPM" value="{{$Mahasiswa->npm}}" required pattern="[0-9]+.{0,}" title="Minimal 1 Karakter, Hanya Angka" autofocus>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-10">
                    <input class="form-control" type="text" name="Nama" value="{{$Mahasiswa->nama}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter" autofocus>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Jurusan</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="Jurusan" required>
                      <option value="" hidden>Pilih</option>
                      @foreach ($Jurusan as $DataJurusan)
                        <option value="{{$DataJurusan->id}}" {{$Mahasiswa->jurusan_id == $DataJurusan->id ? 'selected' : ''}}>{{$DataJurusan->jurusan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Status</label>
                  <div class="col-lg-10">
                    <select class="form-control" name="Status" required>
                      <option value="" hidden>Pilih</option>
                      <option value="Aktif" {{$Mahasiswa->status == 'Aktif' ? 'selected' : ''}}>Aktif</option>
                      <option value="Cuti" {{$Mahasiswa->status == 'Cuti' ? 'selected' : ''}}>Cuti</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label">Foto
                  </label>
                  <div class="col-lg-10">
                    <input class="form-control" type="file" name="Foto" value="{{old('Foto')}}" accept="image/*">
                  </div>
                </div>

                <div class="form-group">

                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn btn-pill-left btn-info btn">
                        <b>Simpan</b>
                      </button>
                      <button type="reset" class="btn btn btn-pill-right btn-danger btn">
                        <b>Reset</b>
                      </button>
                    </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
