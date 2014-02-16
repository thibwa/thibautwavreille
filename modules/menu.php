<!-- Logo -->
	<div id="logo">
		<h1>
            <span class="icon_b icon-screen" style="font-size: 48px;color: #fff !important;margin-right: 5px;"></span>
            <a href="javascript:;" onclick="loadEntry('');">Wavreille Thibaut</a>
        </h1>
	</div>
<!-- /Logo -->

<!-- Nav -->
	<nav id="nav">
		<ul>
			<li <?php if($_GET["p"] == null) echo 'class="active"';?>><a href="javascript:;" onclick="loadEntry('');">Home</a></li>
			<li id="footerNav"><a  href="javascript:;" onclick="loadAndSlide('footer');">Portefolio</a></li>
			<li id="responsiveNav"><a href="javascript:;" onclick="loadAndSlide('responsive');">Responsive Design</a></li>
			<li <?php if($_GET["p"] == "contact") echo 'class="active"';?>><a href="javascript:;" onclick="loadEntry('contact');">Contact</a></li>
		</ul>
	</nav>
<!-- /Nav -->