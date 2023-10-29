@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-3 ml-3">
                <p>Cari Akun Pengguna</p>
            </div>
                <div class="mb-3">
                    <div class="container input-group p-1 ml-3">
                        <input type="text" class="border border-primary form-control" placeholder="Cari Akun" aria-label="Cari Akun">
                            <button class="btn btn-primary ml-1" type="button"><i class="fa fa-search"></i></button>
                            <button class="btn btn-danger ml-1" type="button"><i class="fas fa-sync-alt"></i></i></button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container-fluid mt-5">
        <table class="table table-striped text-center" id="tableakun">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">Total KM</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">Admin</th>
                <td>admin123</td>
                <td>Admin</td>
                <td>-</td>
                <td><span class="badge badge-success">Aktif</span></td>
                <td>
                <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                <button type="button" class="btn btn-success"><i class="iconify" data-icon="bxs:detail"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Zointa</th>
                <td>12345</td>
                <td>User</td>
                <td>34</td>
                <td><span class="badge badge-success">Aktif</span></td>
                <td>
                <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                <button type="button" class="btn btn-success"><i class="iconify" data-icon="bxs:detail"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Jacky</th>
                <td>2345</td>
                <td>User</td>
                <td>50</td>
                <td><span class="badge badge-danger">Tidak Aktif</span></td>
                <td>
                <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                <button type="button" class="btn btn-success"><i class="iconify" data-icon="bxs:detail"></i></button>
                </td>
            </tr>
            
        </table>
    </div>
</div>

@endsection