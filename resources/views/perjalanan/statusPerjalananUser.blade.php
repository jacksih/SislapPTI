@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Cari -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-3 col-sm-12 mb-sm-3">
                    <label for="cariData">Cari :</label>
                    <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariAlamatAwal">Tanggal Awal :</label>
                    <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariAlamatAkhir">Tanggal Akhir :</label>
                    <input type="date" class="form-control" id="cariAlamatAkhir" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-12">
                    <label for="actionCari" class="disable">.</label>
                    <div id="actionCari">
                        <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                                data-icon="material-symbols:search"></i></i></button>
                        <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                                data-icon="solar:refresh-linear"></i></button>
                        <div class="float-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /cari -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Status Perjalanan</h5>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="container-fluid mt-3">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat Awal</th>
                    <th scope="col">Alamat Akhir</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($perjalanans as $perjalanan)
                    <tr>
                        <th scope="row">{{ $perjalanan->user->name }}</th>
                        <td>{{ $perjalanan->tgl_perjalanan }}</td>
                        <td>{{ $perjalanan->alamat_awal }}</td>
                        <td>{{ $perjalanan->alamat_tujuan }}</td>
                        <td>
                            @if ($perjalanan->status === 'pending')
                                <span class="badge badge-warning">{{ $perjalanan->status }}</span>
                            @elseif ($perjalanan->status === 'disetujui')
                                <span class="badge badge-success">{{ $perjalanan->status }}</span>
                            @elseif ($perjalanan->status === 'ditolak')
                                <span class="badge badge-danger">{{ $perjalanan->status }}</span>
                            @endif
                        </td>
                        <td style="width: 12rem;">
                            <a href="{{ route('statusPerjalananUser.edit', $perjalanan->id) }}"><button
                                    class="btn btn-primary ml-1" type="button"><i class="iconify"
                                        data-icon="material-symbols:edit"></i></button></a>
                            {{-- <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i class="iconify" data-icon="bxs:detail"></i></button> --}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
