<!DOCTYPE HTML>
<html>

<?php
$currentPage = 'contact';
include('../php/header.php');
?>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<?php include('../php/navigation.php'); ?>
		<div class="container">
			<div id="fh5co-intro">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 col-md-pull-2">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
			<div id="fh5co-contact">
				<div class="row">
					<div class="col-md-4 animate-box">
						<h3>Contact Information</h3>
						<ul class="contact-info">
							<li><i class="icon-location4"></i>Eindhoven, Netherlands</li>
							<li><i class="icon-linkedin"></i><a href="https://www.linkedin.com/in/t-v-tsekov/" target="_blank">LinkedIn</a></li>
						</ul>
					</div>
					<div class="col-md-8 animate-box">
						<div class="form-wrap">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="15" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modify">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END container -->

		<?php include('../php/footer.php'); ?>
	</div>

	<?php include('../php/scripts.php'); ?>
</body>

</html>