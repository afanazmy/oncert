@extends('layouts.master')

@section('css')
    <style media="screen">
        .horizontal-label {
            padding-top: 0.3em;
        }
    </style>
@endsection

@section('content')
    <!-- Breadcomb area Start-->
    	<div class="breadcomb-area" style="margin-top: 3em">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    					<div class="breadcomb-list">
    						<div class="row">
    							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    								<div class="breadcomb-wp">
    									<div class="breadcomb-icon">
    										<i class="fa fa-user"></i>
    									</div>
    									<div class="breadcomb-ctn">
    										<h2>Detail</h2>
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! Berikut adalah detail akun dari <strong>{{ $user->name }}</strong>.</p>
    									</div>
    								</div>
    							</div>
    							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
    								<div style="text-align: right">
                                        <a href="{!! route('admin.certif.user', ['id' => $user->id]) !!}" target="_blank" class="btn btn-primary notika-btn-primary">Sertifikat</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Breadcomb area End-->
        <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row" style="margin-bottom: 5em">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Data Pengurus</h2>
                        </div>
                        <form class="" action="{!! route('admin.detail.store') !!}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nama lengkap" name="name" value="{{ $user->name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Divisi</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="division_id">
                                                    @foreach ($divisions as $key => $division)
                                                        @if ($user->division_id == $division->id)
                                                            <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                                                            @else
                                                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                        @endif
                                                    @endforeach
        										</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental mg-t-15">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Jabatan di PH</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="daily_manager_id">
                                                    <option value="">Tidak Memiliki Jabatan</option>
                                                    @foreach ($managers as $key => $manager)
                                                        @if ($user->daily_manager_id == $manager->id)
                                                            <option value="{{ $manager->id }}" selected>{{ $manager->name }}</option>
                                                            @else
                                                                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                                        @endif
                                                    @endforeach
        										</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label" style="margin-top: 0.6em">Seorang Kadiv</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="fm-checkbox">
                                                <label><input type="radio" value="1" name="is_kadiv" class="i-checks" @if ($user->is_kadiv) checked @endif> <i></i>Ya</label>
                                                <label style="margin-left: 2em"><input type="radio" value="0" name="is_kadiv" class="i-checks" @if (!$user->is_kadiv) checked @endif> <i></i>Bukan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-example-int mg-t-15">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">

                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <button type="submit" @if($user->is_locked) onclick="isLocked()" @endif class="btn btn-success notika-btn-success">Submit</button>
                                        @if ($user->is_locked)
                                            <script type="text/javascript">
                                                function isLocked() {
                                                    swal({
                                                        "timer":5000,
                                                        "title":"Error",
                                                        "text":"Data yang sudah dikunci tidak dapat diubah",
                                                        "showConfirmButton":false,
                                                        "type":"error"
                                                    });

                                                    event.preventDefault();
                                                }
                                            </script>
                                        @endif

                                        @if (!$user->is_locked)
                                            <a href="{!! route('admin.detail.lock', ['id' => $user->id]) !!}" class="btn btn-warning notika-btn-warning">Kunci Data</a>
                                        @else
                                            <a href="{!! route('admin.detail.lock', ['id' => $user->id]) !!}" class="btn btn-info notika-btn-info">Buka Kunci Data</a>
                                        @endif

                                        @if (!$user->has_certificate)
                                            <a href="{!! route('admin.hasCertif', ['id' => $user->id]) !!}" @if(!$user->is_locked) onclick="notLocked()" @endif class="btn btn-primary notika-btn-primary">Tandai Dapat Sertifikat</a>

                                            @if (!$user->is_locked)
                                                <script type="text/javascript">
                                                    function notLocked() {
                                                        swal({
                                                            "timer":5000,
                                                            "title":"Error",
                                                            "text":"Data pengurus belum dikunci",
                                                            "showConfirmButton":false,
                                                            "type":"error"
                                                        });

                                                        event.preventDefault();
                                                    }
                                                </script>
                                            @endif
                                        @else
                                            <a href="{!! route('admin.hasCertif', ['id' => $user->id]) !!}" class="btn btn-danger notika-btn-danger">Tandai Tidak Dapat Sertifikat</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Kegiatan yang Pernah Di Ikuti</h2>
                            {{-- <p>Jika ada data yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal</p> --}}
                            {{-- <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="notika-icon notika-close"></i>
                                    </span>
                                </button> Jika ada data kepanitiaan yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal
                            </div> --}}
                        </div>
                        <form class="" action="{!! route('admin.detail.verified') !!}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Jabatan</th>
                                            <th class="text-center">Verifikasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $key => $event)
                                            <tr>
                                                <td>{{ $event->event->name }}</td>
                                                <td>{{ $event->position->name }}</td>
                                                <td class="text-center">
                                                    <div class="fm-checkbox">
                                                        <label><input type="checkbox" name="is_verified[]" value="{{ $event->event->id }}" @if ($event->is_verified) checked @endif class="i-checks"> <i></i></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-example-int mg-t-15">
                                <div class="row">
                                    <div class="col-lg-10 col-md-3 col-sm-3 col-xs-12">
                                    </div>
                                    <div class="col-lg-2 col-md-7 col-sm-7 col-xs-12">
                                        <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
@endsection

{{-- @section('script')
    <script type="text/javascript">
    (function ($) {
    "use strict";

    $(document).ready(function() {
         $('#data-table-basic').DataTable();
    });

    })(jQuery);
    </script>
@endsection --}}
