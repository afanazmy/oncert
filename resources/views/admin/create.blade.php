@extends('layouts.master')

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
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! Mohon isikan data secara <strong>hati-hati</strong>.</p>
    									</div>
    								</div>
    							</div>
    							{{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
    								<div style="text-align: right">
                                        <a href="{!! route('admin.certif.user', ['id' => $user->id]) !!}" target="_blank" class="btn btn-primary notika-btn-primary">Sertifikat</a>
    								</div>
    							</div> --}}
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
                        <form class="" action="{!! route('admin.user.store') !!}" method="post">
                            {{ csrf_field() }}
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Nama lengkap" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Email</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="Email" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Password</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="password" class="form-control input-sm" placeholder="Password" name="password" value="{{ old('password') }}">
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
                                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
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
                                                        <option value="{{ $manager->id }}">{{ $manager->name }}</option>
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
    <!-- Form Examples area End-->
@endsection
