@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekapan Adminsitrasi </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Administrasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container">
    <div class="row justify-content-center">
         <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Nama Guru</label>
                            <div class="input-group">
                                <select name="nama_id" class="form-control">
                                    @if (!empty($rekapdata->nama_id))
                                    <option value="{{ @$rekapdata->nama_id }}" {{ !empty($rekapdata->nama_id  ) ? 'selected' : '' }}>
                                        {{ $rekapdata->nama }}
                                    </option>
                                    @endif
                                    @foreach ($profileguru as $pg)
                                    <option value="{{ $pg->id }}">{{ $pg->nama  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Berkas</th>
                      <th>Tgl Pengumpulan</th>
                      <th>Status</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>  
    </div>
</div>
@endsection
