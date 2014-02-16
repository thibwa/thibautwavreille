<!-- Main Content -->
<div class="row double">
	<!-- Content -->
	<div id="content" class="8u skel-cell-mainContent">
		<section class="12u">
			<header>
				<h2>Contact</h2>
			</header>

            <?php
                if($_POST["name"] != "" && $_POST["email"] != ""){
                     $to = "wavreille.thibaut@gmail.com";
                     $subject = "Thibaut Wavreille - contact mail - ".$_POST["name"];
                     $header = "From: ".$_POST["email"]."\n";
                     $header.= "Reply-to: ".$_POST["email"]."\n";
                     $body = $_POST["message"];

                     if (mail($to, $subject, $body, $header)) {
             ?>
                        <div id="notification" class="alert alert-success">
                            Le message a bien été envoyé.
                        </div>
                        <?php
                     } else {
                     ?>
                        <div id="notification" class="alert alert-danger">
                            Erreur dans l'envoie du message.<br/>
                            Veuillez, tout d'abord, vérifier les informations que vous avez rentrées.<br/>
                            En cas de répitions de cette erreur, veuillez contacter l'administrateur par mail :
                            <strong><a href="mailto:wavreille.thibaut@gmail.com" id="MailSite" target="_blank">Wavreille Thibaut</a></strong>
                        </div>
                        <?php
                    }
                 }
            ?>

			<form method="post" id="contactForm" onsubmit="verifForm(this)">
				<div class="5grid">
					<div class="row half">
						<div class="6u">
							<input type="text" name="name" id="name" onblur="verifName(this)" placeholder="Name" />
						</div>
						<div class="6u">
							<input type="text" name="email" id="email" onblur="verifMail(this)" placeholder="Email" />
						</div>
					</div>
					<div class="row half">
						<div class="12u">
							<textarea name="message" id="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row half">
						<div class="12u">
                            <button class="button big" type="submit">Submit</button>
                            <button class="button big alt" type="button" onclick="$('#contactForm').trigger('reset');">
                                Clear Form
                            </button>
						</div>
					</div>
				</div>
			</form>
		</section>
	</div>
	<!-- /Content -->

	<!-- Sidebar -->
	<div id="sidebar" class="4u">
		<section>
			<ul class="info">
				<li>
					<h3>Addresse</h3>
					<p>
						Rue d'Offagne, n°37<br />
						Be - 6850, Paliseul
					</p>
				</li>
				<li>
					<h3>Mail</h3>
					<p><a href="mailto:wavreille.thibaut@gmail.com">wavreille.thibaut@gmail.com</a></p>
				</li>
				<li>
					<h3>Téléphone</h3>
					<p>(+32) 472/702.048</p>
				</li>
			</ul>
		</section>
	</div>
	<!-- /Sidebar -->
</div>