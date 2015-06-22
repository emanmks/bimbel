@extends('templates/base')

@section('content')

<!-- Page-Level Plugin CSS - Tables -->
{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

<section class="content-header">
    <h1>
        Presensi Tentor
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-desktop"></i> Home</a></li>
        <li><a href="#"> Akademik</a></li>
        <li><a href="presensi-siswa"><i class="active"></i> Presensi Tentor</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
           @if(Session::has('message'))
            <div class="alert alert-info alert-dismissable">
                <i class="fa fa-warning"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {{ Session::get('message') }}
            </div>
            @endif

            <div class="box">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover" id="data-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kelas</th>
                                <th>Bidang Studi</th>
                                <th>Jam Belajar</th>
                                <th>Tentor</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><span class="label label-success">31-08-2014</span></td>
                                <td><span class="badge bg-yellow">E-1</span></td>
                                <td><span class="badge bg-green">Matematika</span></td>
                                <td><span class="badge bg-blue">14:00 - 14:45</span></td>
                                <td><span class="badge bg-red">M-2</span></td>
                            </tr>
                            <tr>
                                <td><span class="label label-success">31-08-2014</span></td>
                                <td><span class="badge bg-yellow">E-2</span></td>
                                <td><span class="badge bg-green">Bahasa Indonesia</span></td>
                                <td><span class="badge bg-blue">14:00 - 14:45</span></td>
                                <td><span class="badge bg-red">I-4</span></td>
                            </tr>
                            <tr>
                                <td><span class="label label-success">31-08-2014</span></td>
                                <td><span class="badge bg-yellow">6-1</span></td>
                                <td><span class="badge bg-green">IPA</span></td>
                                <td><span class="badge bg-blue">14:00 - 14:45</span></td>
                                <td><span class="badge bg-red">F-3</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Page-Level Plugin Scripts - Tables -->
{{ HTML::script('assets/js/plugins/datatables/jquery.dataTables.js') }}
{{ HTML::script('assets/js/plugins/datatables/dataTables.bootstrap.js') }}

<script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').dataTable();
        $('.mytooltip').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        })
    });
</script>
@stop