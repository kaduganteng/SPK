@extends('layouts.app')

@section('content')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<!-- ISI CONTENT ADMIN -->
<div class="content">

    <!-- ISI JUDUL KONTEN    -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">


            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- ISI KONTEN    -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-3 " style="">
                    <!-- /.card -->
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <h2 style="text-align: center">Profile Guru</h2>
                        </div>
                        <!-- /.card-header -->
                        @foreach ($profileguru as $fd)
                        <a style="text-align: center" href="{{ asset('upload/' . $fd->foto_diri) }}" class="fancybox"
                            data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                            <img src="{{ asset('upload/' . $fd->foto_diri) }}" class="img-fluid mb-2" alt="white sample"
                                width="400px" height="400px" />
                        </a>
                        <div class="card-body">

                            <strong><i class="fas fa-book mr-1"></i> Nama Guru</strong>

                            <p class="text-muted">
                                {{ $fd->nama }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>

                            <p class="text-muted">{{ $fd->alamat }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i>Tanggal Lahir</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">{{ $fd->tgl_lahir }}</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i>Status</strong>

                            <p class="text-muted">{!! $fd->status !!}</p>
                            <hr>
                            <td>

                                <a href="{{ route('profileguru.destroy', $fd->id) }}">
                                    <button class="btn btn-danger" class="btn">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button></a>

                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModaledit{{ $fd->id }}">
                                    <ion-icon name="create-outline"></ion-icon>
                                </button>

                            </td>
                        </div>
                        @endforeach
                        <button type="button" class="btn btn-info" style="text-align: center" data-toggle="modal"
                            data-target="#exampleModalmenu">
                            Tambah Data</button>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                </div>

                <div class="col-xl-4 col-md-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 ">KETERANGAN</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <p>Berikut merupakan data guru yang mengajar di SDN MARGAASIH, data dapat di ubah sesuai kebutuhan.
        jika ingin mengubah dapat langsung mengklik button edit yang tertera di card view
                            </b>.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
</div>
{{-- Modal Event --}}
<div class="modal fade" id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Baru </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('profileguru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Diri</label>
                        <div class="input-group">
                            <input type="file" class="form-control" name="foto_diri" id="foto_diri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Guru</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama guru">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukan NIP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Status</label>
                        <textarea name="status" id="status" cols="30" rows="10"></textarea>
                        {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                            value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                    </div>


                    <button type="submit" class="btn btn-info">
                        Selesai
                    </button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>

{{-- Modal Edit Event --}}
@foreach ($profileguru as $fd)
<div class="modal fade" id="exampleModaledit{{ $fd->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('/editprofileguru' . $fd->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Masukan Foto Diri</label>
                            <div class="input-group">
                                <img src="{{ asset('upload/' . $fd->foto_diri) }}" class="img-fluid mb-2"
                                    alt="white sample" width="100px" height="100px" />
                            </div>
                            <div class="input-group">
                                <input type="file" class="form-control" name="foto_diri" id="foto_diri">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"
                                value="{{ @$fd->tgl_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Nama </label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ @$fd->nama }}"
                                placeholder="Masukan nama guru">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ @$fd->alamat }}"
                                placeholder="Masukan Alamat">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputName">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukan NIP">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputName">Status</label>
                            <textarea name="status" id="status{{ $fd->id }}" cols="30"
                                rows="10">{{ empty($fd) ? '' : $fd->status }}</textarea>
                            {{-- <input type="text" class="form-control" name="keterangan" id="keterangan"
                                value="{{ @$datacmh->keterangan }}" placeholder="Tambahkan keterangan menu"> --}}
                        </div>


                        <button type="submit" class="btn btn-info">
                            <ion-icon name="save-outline"></ion-icon>
                        </button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
</div>

</div>
@endforeach

@endsection
@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#status'))
        .catch(error => {
            console.error(error);
        });
</script>
@foreach ($profileguru as $fd)
<script>
    ClassicEditor
        .create(document.querySelector('#statusedit{{ $fd->id }}'))
        .catch(error => {
            console.error(error);
        });
</script>
@endforeach
@endsection
