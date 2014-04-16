<?php
if(isset($_POST['submit'])) {

	if(trim($_POST['nom']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['nom']);
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'jakmaster.heuzef@gmail.com'; // Put your own email address here
		$body = "
		Nom de l'event : $nom \n\n
		";
		$headers = 'From: BronyCUB <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, "[BronyCUB] INSCRIPTION", $body, $headers);
		$emailSent = true;
	}
}
?>

<?php include 'header.php'; ?>
	<div class="container-fluid">
		<div class="row">
		 <div class="col-md-2">
		</div>
		 <div class="col-md-8">
		 <img src="./img/pinkie_pie_party.gif" style="float:right; margin-right:10px;" />
			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" class="form-horizontal well" enctype="multipart/form-data">
				<?php if(isset($hasError)) { ?>
				<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Certains champs ne sont pas remplis avec des informations valides.</div>
				<?php echo $erreur; ?></p>
				<?php } ?>

				<?php if(isset($emailSent) && $emailSent == true) { ?>
				<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button>
					<h3>Party !!</h3>
					<iframe width="853" height="480" src="//www.youtube.com/embed/UPAuS3bfOzU?autoplay=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<br />
				<br />
				<?php } ?>

				<div class="form-group">
					<label for="nom" class="col-lg-4 control-label">Votre nom</label>
					<div class="col-lg-4"><input type="text" name="nom" id="nom" class="form-control" id="nom" placeholder="Qui êtes-vous ?" aria-required="true" ></div>
				</div>
				<br />
				<div class="form-group">
					<label for="tel" class="col-lg-4 control-label">Contact</label>
					<div class="col-lg-4"><input type="text" name="tel" id="tel" class="form-control" id="tel" placeholder="Votre telephone ?" aria-required="true" ></div>
				</div>
				<br />
				<div class="form-group">
					<label for="nom_event" class="col-lg-4 control-label">Nom de l'evenement</label>
					<div class="col-lg-4"><input type="text" name="nom_event" id="nom_event" class="form-control" id="nom_event" placeholder="Nom de l'evenement ?" aria-required="true" ></div>
				</div>
				<br />
				<div class="form-group">
					<label for="date" class="col-lg-4 control-label">Date de l'evenement</label>
					<div class="col-lg-4"><input type="text" name="date" id="date" class="form-control" id="date" placeholder="C'est pour quand ?" aria-required="true" ></div>
				</div>
				<br />
				<div class="form-group">
					<label for="lieux" class="col-lg-4 control-label">Lieux de l'evenement</label>
					<div class="col-lg-4"><input type="text" name="lieux" id="lieux" class="form-control" id="lieux" placeholder="C'est où ?" aria-required="true" ></div>
				</div>
				<br />
				<div class="form-group">
					<label for="description" class="col-lg-2 control-label">D&eacute;scription</label>
					<div class="col-lg-10">
						<textarea maxlength="500" rows="15" name="description" id="description" class="form-control" role="textbox" aria-required="true">Décrivez l'évenement ici, soyez précis ;)

Voici quelques outils si besoin :

- Pour créer un sondage : http://framadate.org
- Pour créer un pad : http://framapad.org</textarea></div>
				</div>
				<br />
				<div class="form-group">
					<div class="col-lg-5"></div>
					<div class="col-lg-2">
					<input type="submit" value="GO !!" name="submit" id="submitButton" class="btn btn-info btn-lg" title="Envoyer !" />
					</div>
					<div class="col-lg-5"></div>
				</div>
			</form>
		</div>

		 <div class="col-md-2">
		</div>
		</div>
	</div>

<?php include 'footer.php'; ?>
