@extends('Mahasiswa.Layouts.Master')
@section('content')
  <div class="content-wrapper">
  <div class="panel panel-default" style="margin-top: 20px;">
    <div class="panel-heading">
      <a href="/add-data" class="btn btn-pill-right btn-info" type="button">
        <b>Tambah Data</b>
      </a>
    </div>
      <div class="panel-body">
        <!-- START table-responsive-->
        <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                 </tr>
              </thead>
              <tbody>
                @php
                  $no = 0;
                @endphp
                @foreach ($Mahasiswa as $DataMahasiswa)
                  <tr>
                    <td>{{$no+=1}}</td>
                    <td>{{$DataMahasiswa->npm}}</td>
                    <td>{{$DataMahasiswa->nama}}</td>
                    <td>{{$DataMahasiswa->Jurusan->jurusan}}</td>
                    <td>{{$DataMahasiswa->status}}</td>
                    <td>
                      <a href="/{{Crypt::encryptString($DataMahasiswa->id)}}/edit" class="btn btn-pill-left btn-info" type="button">
                        <b>Edit</b>
                      </a>
                      <a href="/{{Crypt::encryptString($DataMahasiswa->id)}}/delete" class="btn btn-pill-right btn-danger" type="button">
                        <b>Hapus</b>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
           </table>
        </div>
        <!-- END table-responsive-->
      </div>
    </div>
    </div>
@endsection
