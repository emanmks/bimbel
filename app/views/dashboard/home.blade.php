@extends('templates/base')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Sistem Informasi Kesiswaan JILC</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-desktop"></i> Dashboard</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-lg-4">
			<div class="box box-primary">
				<div class="box-header"><h3 class="box-title">Tingkat SMA</h3></div>
				<div class="box-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Kelas</th>
								<th class="pull-right">Jumlah Siswa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>3 SMA</td>
								<td><span class="badge bg-blue pull-right">{{ $_301 }}</span></td>
							</tr>
							<tr>
								<td>2 SMA</td>
								<td><span class="badge bg-blue pull-right">{{ $_201 }}</span></td>
							</tr>
							<tr>
								<td>1 SMA</td>
								<td><span class="badge bg-blue pull-right">{{ $_101 }}</span></td>
							</tr>
							<tr>
								<td>Total SMA</td>
								<td><span class="badge bg-blue pull-right">{{ $total_sma = $_301 + $_201 + $_101 }}</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="box box-success">
				<div class="box-header"><h3 class="box-title">Tingkat SMP</h3></div>
				<div class="box-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Kelas</th>
								<th class="pull-right">Jumlah Siswa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>3 SMP</td>
								<td><span class="badge bg-green pull-right">{{ $_302 }}</span></td>
							</tr>
							<tr>
								<td>2 SMP</td>
								<td><span class="badge bg-green pull-right">{{ $_202 }}</span></td>
							</tr>
							<tr>
								<td>1 SMP</td>
								<td><span class="badge bg-green pull-right">{{ $_102 }}</span></td>
							</tr>
							<tr>
								<td>Total SMP</td>
								<td><span class="badge bg-green pull-right">{{ $total_smp = $_302 + $_202 + $_102 }}</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="box box-danger">
				<div class="box-header"><h3 class="box-title">Tingkat SD</h3></div>
				<div class="box-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Kelas</th>
								<th class="pull-right">Jumlah Siswa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>6 SD</td>
								<td><span class="badge bg-red pull-right">{{ $_603 }}</span></td>
							</tr>
							<tr>
								<td>5 SD</td>
								<td><span class="badge bg-red pull-right">{{ $_503 }}</span></td>
							</tr>
							<tr>
								<td>4 SD</td>
								<td><span class="badge bg-red pull-right">{{ $_403 }}</span></td>
							</tr>
							<tr>
								<td>Total SD</td>
								<td><span class="badge bg-red pull-right">{{ $total_sd = $_603 + $_503 + $_403 }}</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Statistik Siswa Aktif</h3>
				</div>

				<div class="box-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Siswa Hingga Bulan Lalu</td>
								<td>Pendaftar Baru Bulan Ini</td>
								<td>Siswa Pindahan</td>
								<td>Siswa Keluar</td>
								<td>Siswa DO</td>
								<td>Siswa Pindah Ke Cabang Lain</td>
								<td>Total Siswa Aktif</td>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><span class="badge bg-green">{{ $last_month_registrations }}</span></td>
								<td><span class="badge bg-blue">{{ $curr_month_registrations }}</span></td>
								<td><span class="badge bg-blue">{{ $movement_registrations }}</span></td>
								<td><span class="badge bg-red">{{ $curr_resign_students }}</span></td>
								<td><span class="badge bg-red">{{ $curr_do_students }}</span></td>
								<td><span class="badge bg-red">{{ $curr_relocate_students }}</span></td>
								<td><span class="badge bg-green">{{ $curr_active_students }}</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="box box-default">
				<div class="box-header">
					<h3 class="box-title">Statistik Kelas</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<?php $total_capacity = 0; $total_students = 0; ?>
						@foreach($courses as $course)
							<div class="col-xs-2 text-center" style="border-right: 1px solid #f4f4f4; margin-bottom: 10px">
	                            <input type="text" class="knob" data-readonly="true" value="{{ round(($course->placements->count()/$course->capacity)*100,2) }}" data-width="50" data-height="50" data-fgColor="#3c8dbc"/>
	                            <div class="knob-label">Kelas <strong>{{ $course->name }}</strong> [<strong>{{ $course->placements->count() }}</strong> to <strong>{{ $course->capacity }}</strong>]</div>
	                        </div>
	                    <?php $total_capacity += $course->capacity; $total_students += $course->placements->count() ?>
						@endforeach
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-4"></div>
						<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4; margin-bottom: 10px">
                            <input type="text" class="knob" data-readonly="true" value="{{ round(($total_students/$total_capacity)*100,2) }}" data-width="50" data-height="50" data-fgColor="#3c8dbc"/>
                            <div class="knob-label">Total Siswa <strong>{{ $total_students }}</strong> dari Kapasitas <strong>{{ $total_capacity }}</strong></div>
                        </div>
                        <div class="col-xs-4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section><!-- /.content -->

{{ HTML::script('assets/js/plugins/jqueryKnob/jquery.knob.js') }}

<script type="text/javascript">
    $(function(){
        $('.knob').knob();
        $('#onProgress').hide();
    })

    function changeCase()
    {
    	$('#onProgress').show();
    	
    	$.ajax({
            url:"{{ URL::to('change') }}",
            type:'GET',
            success:function(){
                window.location = "{{ URL::to('/') }}";
            }
        });
    }
</script>
@stop