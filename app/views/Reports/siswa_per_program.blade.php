@extends('templates/base')

@section('content')

<section class="content-header">
    <h1>
        Laporan Siswa Per Program Bimbingan
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-desktop"></i> Home</a></li>
        <li><a href="{{ URL::to('laporan') }}"><i class="active"></i> Laporan</a></li>
        <li><a href="{{ URL::to('laporan/siswa-per-program') }}"><i class="active"></i> Laporan Siswa Per Program</a></li>
    </ol>
</section>

<section class="content invoice">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <i class="fa fa-files-o"></i> LAPORAN SISWA PER PROGRAM
                <small class="pull-right">Program Reguler, TGL : {{ date('d-m-Y') }}</small>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered table-hover" id="data-table">
                <thead>
                    <tr>
                        <th>Nomor Pokok</th>
                        <th>Nama Lengkap</th>
                        <th>Sekolah</th>
                        <th>Tempat & Tgl Lahir</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>301.23.29001</td>
                        <td><strong>Muhammad Arif</strong></td>
                        <td>SMA Negeri 17 Makassar</td>
                        <td>Makassar, 21-10-1998</td>
                    </tr>
                    <tr>
                        <td>301.23.29002</td>
                        <td><strong>Muhammad Arif</strong></td>
                        <td>SMA Negeri 1 Makassar</td>
                        <td>Makassar, 21-10-1998</td>
                    </tr>
                    <tr>
                        <td>301.23.29003</td>
                        <td><strong>Muhammad Arif</strong></td>
                        <td>SMA Negeri 2 Makassar</td>
                        <td>Makassar, 21-10-1998</td>
                    </tr>
                    <tr>
                        <td>301.23.29004</td>
                        <td><strong>Muhammad Arif</strong></td>
                        <td>SMA Negeri 8 Makassar</td>
                        <td>Makassar, 21-10-1998</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-6">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop