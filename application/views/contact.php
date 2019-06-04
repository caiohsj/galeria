		<!-- Page section -->
		<div class="page-section contact-page">
			<div class="contact-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						<div class="contact-text">
							<?php if(isset($msg_success)){ ?>
							<div class="alert alert-success">Mensagem enviada</div>
							<?php } ?>
							<span>Say hello</span>
							<h2>Get in touch</h2>
							<form action="send" class="contact-form" method="post">
								<input type="text" placeholder="Your name" name="name">
								<input type="text" placeholder="Your email" name="email">
								<input type="text" placeholder="Subject" name="subject">
								<textarea placeholder="Message" name="message"></textarea>
								<button class="site-btn">Send message</button>
							</form>
							<div class="contac-info">
								<p><?php echo $configs["street"]; ?>, Nº <?php echo $configs["number"]; ?>, <?php echo $configs["city"]; ?> - <?php echo $configs["state"]; ?></p>
								<p>+55 <?php echo $configs["phone"]; ?></p>
								<p><?php echo $configs["email"]; ?></p>
							</div>
						</div>
					</div>
					<div class="col-xl-6 p-0">
						<div class="mapouter"><div class="gmap_canvas"><iframe width="474" height="557" id="gmap_canvas" src="https://maps.google.com/maps?q=coxim&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:557px;width:440px;}.gmap_canvas {overflow:hidden;background:none!important;height:557px;width:440px;}</style></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->