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
    							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    								<div class="breadcomb-wp">
    									<div class="breadcomb-icon">
    										<i class="fa fa-user"></i>
    									</div>
    									<div class="breadcomb-ctn">
    										<h2>Setting</h2>
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! Tolong review kembali setting Anda.</p>
    									</div>
    								</div>
    							</div>
    							{{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
    								<div class="breadcomb-report">
    									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
                            {{-- <h2>Horizontal Form</h2> --}}
                        </div>
                        <form class="" action="{!! route('admin.setting.store') !!}" method="post">
                            {{ csrf_field() }}
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Start Increment</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="number" class="form-control input-sm" placeholder="1" name="increment" @if($setting != null) value="{{ $setting->increment }}" @endif required>
                                                <small>Apabila Start Increment < 10, maka otomatis akan ditambahkan angka 0 didepannya</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm horizontal-label">Base No. Sertifikat</label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="/1.5/HIMAKOMSI/V/2018" name="base" @if($setting != null) value="{{ $setting->base }}" @endif required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
