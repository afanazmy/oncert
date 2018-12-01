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
        <style media="screen">
            .fs-continue {
                display: none;
            }
        </style>
		<script src="{!! asset('assets/js/modernizr.custom.js') !!}"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Hi {{ $username }}!</h1>
                    {{-- <h5 style="margin-top:0.2em">Tolong isi form sesuai kepanitiaan yang kamu ikuti :)</h5> --}}
					{{-- <div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
					</div> --}}
				</div>

                <form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
                            <label class="fs-field-label fs-anim-upper" style="padding-bottom: 0.5em">Terima kasih <span style="font-size: 0.5em;">telah mengisi formulir :)</span></label>
                            <label class="fs-field-label fs-anim-upper" style="padding-bottom: 0px">Mau edit data? <a href="{!! route('eo.edit') !!}" style="font-size: 0.5em;">disini ya</a></label>
						</li>
					</ol><!-- /fs-fields -->
					{{-- <button class="fs-submit" type="submit">Send answers</button> --}}
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
            		ctrlProgress : false,
            		// show navigation dots
            		ctrlNavDots : false,
            		// show [current field]/[total fields] status
            		ctrlNavPosition : false,
            		// reached the review and submit step
            		onReview : function() { return false; }
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
