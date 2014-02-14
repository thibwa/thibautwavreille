<!-- a low-tech hack for pre-loading the images -->
<div class="preload" style="overflow: hidden; width: 0px; height: 0px">
	<img src="images/projects/responsive/site1.jpg" />
	<img src="images/projects/responsive/site2.jpg" />
	<img src="images/projects/responsive/site3.jpg" />
	<img src="images/projects/responsive/site3r.jpg" />
	<img src="images/projects/responsive/site4.jpg" />
	<img src="images/projects/responsive/site4r.jpg" />
</div>

<!-- Device Image -->
<div class="row" id="responsive">
	<div class="12u">
		<div class="main clearfix">
			<div class="md-slider">
				<div class="md-device-wrapper">
					<div class="md-device md-device-1">
						<a href="javascript:;"><img src="images/projects/responsive/site1.jpg" /></a>
						<div class="md-border-element"></div>
						<div class="md-base-element"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Device Image -->

<script>
	var el = document.querySelector( '.md-slider' ),
		settings = {
			autoplay : true,
			interval : 3000,
			devices : [ 
				{ cName : 'md-device-1', canRotate : false, imgsrc : 'images/projects/responsive/site1.jpg' },
				{ cName : 'md-device-2', canRotate : false, imgsrc : 'images/projects/responsive/site2.jpg' },
				{ cName : 'md-device-3', canRotate : true, imgsrc : 'images/projects/responsive/site3.jpg', rotatedsrc : 'images/projects/responsive/site3r.jpg' },
				{ cName : 'md-device-4', canRotate : true, imgsrc : 'images/projects/responsive/site4.jpg', rotatedsrc : 'images/projects/responsive/site4r.jpg' }
			]
		},
		devicesTotal = settings.devices.length,
		ds = MorphingDevice( el, settings );

	// create navigation triggers
	var nav = document.createElement( 'nav' );
	for( var i = 0; i < devicesTotal; ++i ) {

		var trigger = document.createElement( 'a' );
		trigger.className = i === 0 ? 'md-current' : '';
		trigger.setAttribute( 'href', 'javascript:;' );
		trigger.setAttribute( 'pos', i );
		trigger.onclick = function( event ) {

			ds.stopSlideshow();
			var pos = Number( event.target.getAttribute( 'pos' ) );
			if( pos === ds.getCurrent() ) {
				return false;
			}
			ds.updateCurrentTrigger( event.target );
			ds.setCurrent( pos );
			ds.changeDevice();
			return false;

		};
		nav.appendChild( trigger );

	}
	el.insertBefore( nav, el.children[0]);

	if( settings.autoplay ) {
		ds.startSlideshow();
	}
</script>

<!-- Portfolio -->
	<div class="row">
		<div class="6u">
			<section>
				<header>
					<h2>Fusce tincidunt augue ligula quis</h2>
				</header>
				<p>
					Praesent porta accumsan orci, nec mollis sapien elementum nec. Praesent 
					vitae lementum dui, eget rutrum 
					lorem. Donec augue dui, iaculis vitae metus vel, adipiscing porta dolor. 
					Fusce odio mauris, luctus in dignissim vitae metus
				</p>
			</section>
		</div>
		
		<div class="6u">
			<section>
				<header>
					<h2>Donec vulputate augue vel congue</h2>
				</header>
				<p>
					Quisque hendrerit nunc a est volutpat, vitae molestie lacus euismod. 
					Nunc pharetra vulputate neque quis convallis. Fusce aliquam lacus at hendrerit 
					molestie. Vivamus quis sem at urna iaculis cursus. Suspendisse cursus tempor viverra nteger
				</p>
			</section>
		</div>
	</div>
<!-- /Portfolio -->