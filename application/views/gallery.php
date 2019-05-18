<!-- Page section -->
		<div class="page-section gallery-page">
			<ul class="portfolio-filter">
				<li class="filter all active" data-filter="*">All</li>
				<li class="filter" data-filter=".photo">Photography</li>
				<li class="filter" data-filter=".nature">Nature</li>
				<li class="filter" data-filter=".love">Love</li>
				<li class="filter" data-filter=".animals">Animals</li>
			</ul>
			<div class="portfolio-gallery">
				<?php
				foreach($photos as $photos_item):
					$url = $photos_item["url"];
				?>
				<div class="gallery-item animals">
					<img src="<?php echo $url;?>" alt="">
					<div class="hover-links">
						<a href="" class="site-btn sb-light">Next</a>
					</div>
				</div>
				<?php endforeach;?>
			</div>

		</div>
		<!-- Page section end-->