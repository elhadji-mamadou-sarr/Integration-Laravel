<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	
</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	@include('racoucis.header')
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Get 24/7 Support</p>
						<h1>Inscription</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Inscrivez-vous pour vos reservation !</h2>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" action="{{ route('register') }}" id="fruitkha-contact" >
                            @csrf

							<p>
								<input type="text" placeholder="Nom" name="name" id="name">
                                <input type="text" placeholder="Prenom" name="prenom" id="prenom">
							</p>
							<p>
                                <input type="email" placeholder="Email" name="email" id="email">
								<input type="tel" placeholder="Téléphone" name="telephone" id="telephone">
							</p>
                            <p>
                                <input type="text" placeholder="Mot de Passe" name="password" id="subject">
                                <input type="text" placeholder="Confirmer mot de Passe" name="password_confirmation" id="subject">
                            </p>

							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Notre Address</h4>
							<p>34/8, Diamniadio <br> Cyte du Savoir <br> Sénégal</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i>Heure d'ouverture</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +221 77 222 33 33 <br> Email: support@diamniadio.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->


	@include('racoucis.footer')

</body>
</html>
