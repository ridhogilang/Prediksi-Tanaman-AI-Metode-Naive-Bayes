@extends('layout.admin')

@section('container')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Testing User</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Testing User</h4>
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
