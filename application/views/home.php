		<!-- Page section -->
		<div class="page-section home-page">
			<div class="hero-slider owl-carousel">
				<?php
				$i = 0;
				foreach($projects as $projects_item){ 
				?>
				<div class="slider-item d-flex align-items-center set-bg" data-setbg="<?php echo $projects_item['image']; ?>" data-hash="project<?php echo $i; ?>">
					<div class="si-text-box">
						<span>Photography - <?php echo $string[1]; ?></span>
						<h2><?php echo $projects_item["title"]; ?></h2>
						<p><?php echo $projects_item["description"]; ?></p>
						<a href="" class="site-btn">Read More</a>
					</div>
					<?php if($i == $quantity_projects-1){ ?>
					<div class="next-slide-show set-bg" data-setbg="<?php echo $projects[0]['image']; ?>">
						<a href="#project0" class="ns-btn">Next</a>
					</div>
					<?php } else { ?>
					<div class="next-slide-show set-bg" data-setbg="<?php echo $projects[$i+1]['image']; ?>">
						<a href="#project<?php echo $i+1; ?>" class="ns-btn">Next</a>
					</div>
					<?php } ?>
				</div>
				<?php $i++;}?>
			</div>
			<div id="snh-1"></div>
		</div>
		<!-- Page section end-->