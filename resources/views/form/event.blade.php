<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Event yang Diikuti</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		{{-- <link rel="shortcut icon" href="../favicon.ico"> --}}
		<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/normalize.css') !!}" />
		<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/demo.css') !!}" />
		<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/component.css') !!}" />
		<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/cs-select.css') !!}" />
		<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/cs-skin-underline.css') !!}" />
		<script src="{!! asset('assets/js/modernizr.custom.js') !!}"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Hi {{ $username }}!</h1>
                    <h5 style="margin-top:0.2em">Tolong isi form sesuai kepanitiaan yang kamu ikuti :)</h5>
					{{-- <div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
					</div> --}}
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" action="{!! route('eo.store') !!}" method="post">
                    {{ csrf_field() }}
					<ol class="fs-fields">
                        @foreach ($events as $key => $event)
                            <li data-input-trigger>
    							<label class="fs-field-label fs-anim-upper" data-info="Jika Anda mengikuti kepanitiaan event ini, pilih salah satu sie yang Anda ikuti.">Di {{ $event->name }}, saya </label>
                                <input type="hidden" name="event_id[]" value="{{ $event->id }}">
                                <section>
                                    <select class="cs-select cs-skin-underline fs-anim-lower" name="position_id[]">
                    					<option value="" disabled selected>Pilih jabatan</option>
                                        <option value="tm">Tidak Mengikuti Event Ini</option>
                    					@foreach ($positions as $key => $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                    				</select>
                                </section>

    							{{-- <select class="cs-select cs-skin-boxes fs-anim-lower">
    								<option value="" disabled selected>Pick a color</option>
    								<option value="#588c75" data-class="color-588c75">#588c75</option>

    							</select> --}}
    						</li>
                        @endforeach
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->
		<script src="{!! asset('assets/js/classie.js') !!}"></script>
		<script src="{!! asset('assets/js/selectFx.js') !!}"></script>
		<script src="{!! asset('assets/js/fullscreenForm.js') !!}"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

                /**
            	 * FForm options
            	 */
            	FForm.prototype.options = {
            		// show progress bar
            		ctrlProgress : true,
            		// show navigation dots
            		ctrlNavDots : true,
            		// show [current field]/[total fields] status
            		ctrlNavPosition : true,
            		// reached the review and submit step
            		onReview : function() { return true; }
            	};

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );


			})();

		</script>
	</body>
</html>
