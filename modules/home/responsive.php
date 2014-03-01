<!-- a low-tech hack for pre-loading the images -->
<div class="preload" style="overflow: hidden; width: 0px; height: 0px">
	<img src="images/projects/investporc_Fotor.jpg" />
	<img src="images/projects/investporc_Fotor.jpg" />
	<img src="images/projects/responsive/investporc_tablete_portrait_Fotor.jpg" />
	<img src="images/projects/responsive/investporc_tablete_landscape_Fotor.jpg" />
	<img src="images/projects/responsive/investporc_gsm_portrait_Fotor.jpg" />
	<img src="images/projects/responsive/investporc_gsm_landscape_Fotor.jpg" />
	<img src="images/projects/investporc/tablet/IMG_0027.png" />
	<img src="images/projects/investporc/tablet/IMG_0028.png" />
	<img src="images/projects/investporc/tablet/IMG_0029.png" />
	<img src="images/projects/investporc/tablet/IMG_0030.png" />
	<img src="images/projects/investporc/tablet/IMG_0031.png" />
	<img src="images/projects/investporc/tablet/IMG_0032.png" />
	<img src="images/projects/investporc/phone/IMG_0033.png" />
	<img src="images/projects/investporc/phone/IMG_0034.png" />
	<img src="images/projects/investporc/phone/IMG_0035.png" />
	<img src="images/projects/investporc/phone/IMG_0036.png" />
	<img src="images/projects/investporc/phone/IMG_0037.png" />
	<img src="images/projects/investporc/phone/IMG_0038.png" />
</div>

<!-- Device Image -->
<div class="row" id="responsive">
	<div class="12u">
		<div class="main clearfix">
			<div class="md-slider">
				<div class="md-device-wrapper">
					<div class="md-device md-device-1">
						<a href="javascript:;"><img src="images/projects/investporc_Fotor.jpg" /></a>
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
				{ cName : 'md-device-1', canRotate : false, imgsrc : 'images/projects/investporc_Fotor.jpg' },
				{ cName : 'md-device-2', canRotate : false, imgsrc : 'images/projects/investporc_Fotor.jpg' },
				{ cName : 'md-device-3', canRotate : true, imgsrc : 'images/projects/responsive/investporc_tablete_portrait_Fotor.jpg', rotatedsrc : 'images/projects/responsive/investporc_tablete_landscape_Fotor.jpg' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0027.png' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0028.png' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0029.png' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0030.png' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0031.png' },
				{ cName : 'md-device-3', canRotate : false, imgsrc : 'images/projects/investporc/tablet/IMG_0032.png' },
				{ cName : 'md-device-4', canRotate : true, imgsrc : 'images/projects/responsive/investporc_gsm_portrait_Fotor.jpg', rotatedsrc : 'images/projects/responsive/investporc_gsm_landscape_Fotor.jpg' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0033.png' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0034.png' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0035.png' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0036.png' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0037.png' },
				{ cName : 'md-device-4', canRotate : false, imgsrc : 'images/projects/investporc/phone/IMG_0038.png' },
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
                    <h2>
                        <img src="images/projects/investporc/cochoncoul02.png" alt=""/>
                        Analysez la viabilité de votre projet
                    </h2>
				</header>
				<p>
					L'outil permet de calculer le montant des investissements
					à consentir pour votre projet et le revenu espéré de l'activité.
		        </p>
			</section>
		</div>
		
		<div class="6u">
			<section>
				<header>
                    <h2>
                        <img src="images/projects/investporc/cochon-prof-coul02.png" alt=""/>
                        Outil simple et complet
                    </h2>
				</header>
				<p>
					En quelques clics, cet outil vous aidera à chiffrer votre projet.
				</p>
				<hr/>
				<p>
				    <a href="http://demo.investporc.cra.wallonie.be" target="_blank" class="icon icon-link"> Demo InvestPorc</a><br/>
                    <a href="https://github.com/thibwa/investporc/" target="_blank" class="icon icon-github"> Suivez l'avancement d'InvestPorc sur GitHub</a>
				</p>
			</section>
		</div>
	</div>
<!-- /Portfolio -->