@extends('layout.admin')

@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Training</a></li>
                </ol>
            </div>
            @if (session('status') === 'success')
                <div class="alert alert-primary alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Success!</strong> {{ session('message') }}
                </div>
            @elseif (session('status') === 'error')
                <div class="alert alert-danger alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Error!</strong> {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Training</h4>
                            <div class="col-lg-14 ml-auto">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">Tambah Data Training</button>
                            </div>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Data Training</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>
                                        <form class="modal-body" action="{{ route('datatraining.tambah') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="oksigen"><strong>Oksigen</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" name="oksigen" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-1" for="tekstur"><strong>Tekstur</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" name="tekstur" class="form-control" step="0.01">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-1" for="kelembapan"><strong>Kelembapan</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" name="kelembapan" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="suhu"><strong>Suhu</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" name="suhu" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-1" for="keasaman"><strong>Keasaman</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" name="keasaman" class="form-control" step="0.01">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-1" for="tanaman"><strong>Tanaman</strong>
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="">
                                                            <select class="form-control dropdown-groups" id="single-select"
                                                                name="tanaman">
                                                                <option value="" disabled selected>Pilih Tanaman
                                                                </option>
                                                                <option value="Cabai">Cabai</option>
                                                                <option value="Jagung">Jagung</option>
                                                                <option value="Padi">Padi</option>
                                                                <option value="Kacang Tanah">Kacang Tanah</option>
                                                                <option value="Kedelai">Kedelai</option>
                                                                <option value="Semangka">Semangka</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="display">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Oksigen</th>
                                            <th>Tekstur</th>
                                            <th>Kelembapan</th>
                                            <th>Suhu</th>
                                            <th>Keasaman</th>
                                            <th>Tanaman</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->oksigen }}</td>
                                                <td>{{ $data->tekstur }}</td>
                                                <td>{{ $data->kelembapan }}</td>
                                                <td>{{ $data->suhu }}</td>
                                                <td>{{ $data->keasaman }}</td>
                                                <td>{{ $data->tanaman }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <form action="{{ route('datatraining.delete', ['id' => $data->id]) }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger shadow btn-xs sharp"
                                                                onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Oksigen</th>
                                            <th>Tekstur</th>
                                            <th>Kelembapan</th>
                                            <th>Suhu</th>
                                            <th>Keasaman</th>
                                            <th>Tanaman</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
