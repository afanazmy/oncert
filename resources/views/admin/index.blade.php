@extends('layouts.master')

@section('content')
    <!-- Breadcomb area Start-->
    	<div class="breadcomb-area" style="margin-top: 3em">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    					<div class="breadcomb-list">
    						<div class="row">
    							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    								<div class="breadcomb-wp">
    									<div class="breadcomb-icon">
    										<i class="fa fa-user"></i>
    									</div>
    									<div class="breadcomb-ctn">
    										<h2>Pengurus</h2>
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! Tolong review lagi data pengurus dibawah ini.</p>
    									</div>
    								</div>
    							</div>
    							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
    								<div class="breadcomb-report">
    									<a href="{!! route('admin.user.create') !!}" class="btn btn-success notika-btn-success waves-effect">Tambah Pengurus</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Breadcomb area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Pengurus</h2>
                            {{-- <p>Jika ada data yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal</p> --}}
                            {{-- <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="notika-icon notika-close"></i>
                                    </span>
                                </button> Jika ada data kepanitiaan yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->division->name }}</td>
                                            @if ($user->is_kadiv)
                                                <td>Kepala Divisi</td>
                                            @else
                                                <td>Staff Divisi</td>
                                            @endif

                                            <td>
                                                <a href="{!! route('admin.detail', ['id' => $user->id]) !!}" class="btn btn-primary notika-btn-primary waves-effect" target="_blank">Detail</a>
                                                {{-- <a href="#" class="btn btn-info notika-btn-info waves-effect">Ubah</a> --}}
                                                @if ($user->is_active)
                                                    <a href="{!! route('admin.nonactivate', ['id' => $user->id]) !!}" class="btn btn-danger notika-btn-danger waves-effect">Nonaktifkan</a>
                                                @else
                                                    <a href="{!! route('admin.nonactivate', ['id' => $user->id]) !!}" class="btn btn-success notika-btn-success waves-effect">Aktifkan</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
@endsection

@section('script')
    <script type="text/javascript">
    (function ($) {
    "use strict";

    $(document).ready(function() {
         $('#data-table-basic').DataTable();
    });

    })(jQuery);
    </script>
@endsection
